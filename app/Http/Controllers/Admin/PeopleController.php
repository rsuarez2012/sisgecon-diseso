<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleStoreRequest;
use App\Http\Requests\PeopleUpdateRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;//para buscar relacion titular->beneficiario

use App\People;
use App\Dependency;
use App\Beneficiary;
class PeopleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::orderBy('status', 'ASC')->get();
        
        //dd($people);
        return view('admin.peoples.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencies = Dependency::orderBy('id', 'ASC')->get()->pluck('dependency', 'id');
        return view('admin.peoples.create', compact('dependencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleStoreRequest $request)
    {
        //$da = $request->all();
        //dd($da);
        $people = People::create($request->all());
        return redirect()->route('titulares.index', $people->id)->with('info', 'Titular Almacenado con Exito.!');
        //return redirect()->action('PeopleController@index')->with('info', 'Titular Almacenado con Exito.!');
        //return redirect()->route('titular.editar', $people->id)->with('info', 'Titular Almacenado con Exito.!');
        //return back()->with('info', 'Titular Almacenado con Exito.!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$date = Carbon::now();
        //$date = $date->format('d-m-Y');
        //dd($date);
        $dependencies = Dependency::orderBy('id', 'ASC')->pluck('dependency', 'id');
        $person = People::findOrFail($id);
        //dd($person);
        return view('admin.peoples.show')->with(compact('person', 'dependencies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::findOrFail($id);
        $dependencies = Dependency::orderBy('id', 'ASC')->get()->pluck('dependency', 'id');
        //dd($people);
        return view('admin.peoples.edit', compact('people', 'dependencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleUpdateRequest $request, $id)
    {
        //
        $people = People::findOrFail($id);
        //dd($people);
        //$person->People::find($id);
        $people->fill($request->all())->save();
        //dd($person);
        //return view('admin.peoples.show')->with(compact('people'));
        return redirect()->route('titulares.show', $people->id)->with('info', 'Titular Editado con Exito.!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$peopl = People::find($id);
        $peopl = People::findOrFail($id);
        $peopl->delete();
        return redirect()->route('titulares.index')->with('info', $peopl->first_name.' '.$peopl->last_name . ' Fue Eliminado correctamente');
    }


    //ver carga familiar
    public function beneficiaries($id)
    {
        $people = People::findOrFail($id);
        $cargas = Beneficiary::all()->where('people_id', $id);
        //dd($carga);
        return view('admin.peoples.beneficiaries', compact('people', 'cargas'));
    }
    
    public function bene()
    {
        $peoples = People::all();
        return view('admin.peoples.bene', compact('peoples'));
    }
    public function nebe()
    {
        $people_id = Input::get('people_id');
        $beneficiaries = Beneficiary::where('people_id', '=', $people_id)->get();
        //$peoples = People::all();
        //return view('admin.peoples.bene', compact('peoples'));
        return response()->json($beneficiaries);
    }

}
