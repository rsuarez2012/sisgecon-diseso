<?php

namespace App\Http\Controllers\Admin;

use App\Beneficiary;
use App\People;
use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class AppointmentController extends Controller
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
        //$beneficiaries = Beneficiary::orderBy('people_id')->get();
        //dd($beneficiaries);
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        //$beneficiaries = Beneficiary::where('people_id', $id)->get();
        //dd($beneficiaries);
        $appointments = Appointment::all();
        $specialists = User::where('rol_id', 4)->get()->pluck('full_specialist', 'id');
        //dd($specialists);
        return view('admin.appointments.index', compact('appointments', 'peoples', 'specialists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $people_id = $request->people_id;
        //dd($people_id);
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        //dd($peoples);
        return view('admin.beneficiaries.create', compact('peoples', 'people_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$da = $request->all();
        //dd($da);
        $appointments = Appointment::create($request->all());
        //return redirect()->route('titulares.index', $beneficiaries->id)->with('info', 'Beneficiario Almacenado con Exito.!');
        return back()->with('info', 'Cita Almacenado con Exito.!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$peoples = People::orderBy('id', 'ASC')->pluck('first_name', 'id');
        //$beneficiary = Beneficiary::findOrFail($id);
        //dd($beneficiary);
        //return view('admin.beneficiaries.show')->with(compact('beneficiary', 'peoples'));
        $appointments = Appointment::all();
        return response()->json($appointments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        $beneficiary = Beneficiary::findOrFail($id);
        //dd($people);
        return view('admin.beneficiaries.edit', compact('beneficiary', 'peoples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $beneficiary = Beneficiary::findOrFail($id);
        
        $beneficiary->fill($request->all())->save();
        
        return redirect()->route('beneficiarios.show', $beneficiary->id)->with('info', 'Beneficiario Editado con Exito.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beneficiary = Beneficiary::findOrFail($id);
        $beneficiary->delete();
        return back()->with('info', 'Beneficiario '.$beneficiary->first_name.' '.$beneficiary->last_name.' Eliminado correctamente.!');
    }
}
