<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $users = User::all();
        $roles = Rol::where('condition', 1)->get()->pluck('full_rol', 'id');;//listar los roles
        //dd($usuarios);
        return view('admin.users.index', compact('users', 'roles'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$user = $request->all();
        //dd($user);
        $user = new User();
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->dni          = $request->dni;
        $user->telephone    = $request->telephone;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->especialidad = $request->especialidad;
        $user->status       = 1;
        $user->rol_id       = $request->rol_id;
        //dd($user);
        

        //inicio de registro de avatar
        if($request->hasFile('image')){

            //envio de nombre de la imagen y la extension
            $filenamewithExt = $request->file('image')->guessClientExtension();

            //Get just filename
                $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
                
                //Get just ext
                $extension = $request->file('image')->guessClientExtension();
                
                //FileName to store
                $fileNameToStore = time().'.'.$extension;
                
                //Upload Image
                //$path = $request->file('image')->storeAs('public/img/usuario',$fileNameToStore);
                $user->image = $request->file('image')->storeAs('usuarios', $fileNameToStore);//file es el nombre del input 

            
            } else{

                $fileNameToStore="noimagen.jpg";
            }
            
           $user->image=$fileNameToStore;

            //fin registrar imagen
            $user->save();
            //return view('admin.users.index'); 
            return redirect()->route('usuarios.index')->with('info', 'Se Ha creado el nuevo usuario con Exito.!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //medicos especialistas
    public function specialists()
    {
        # code...
        $specialists = User::where('rol_id', 4)->get()->pluck('full_specialist', 'id');
        return $specialists;
    }
}
