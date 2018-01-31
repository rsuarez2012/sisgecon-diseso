<?php

namespace App\Http\Controllers\Admin;

use App\Beneficiary;
use App\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiaries = Beneficiary::orderBy('people_id')->paginate(10);
        //dd($beneficiaries);
        return view('admin.beneficiaries.index', compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples = People::orderBy('id', 'ASC')->pluck('first_name', 'id');
        //dd($peoples);
        return view('admin.beneficiaries.create', compact('peoples'));
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
        $beneficiaries = Beneficiary::create($request->all());
        return redirect()->route('beneficiarios.edit', $beneficiaries->id)->with('info', 'Beneficiario Almacenado con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peoples = People::orderBy('id', 'ASC')->pluck('first_name', 'id');
        $beneficiary = Beneficiary::findOrFail($id);
        //dd($beneficiary);
        return view('admin.beneficiaries.show')->with(compact('beneficiary', 'peoples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples = People::orderBy('id', 'ASC')->pluck('first_name', 'id');
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
    public function update(Request $request, Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beneficiary = Beneficiary::find($id)->delete();
        return back()->with('info', 'Beneficiario Eliminado correctamente.!');
    }
}
