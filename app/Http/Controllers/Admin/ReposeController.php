<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReposeStoreRequest;
use App\Repose;
use App\People;
use Carbon\Carbon;

class ReposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reposes = Repose::all();
        return view('admin/reposes/index', compact('reposes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        return view('admin/reposes/create', compact('peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReposeStoreRequest $request)
    {
        $peoples = Repose::create($request->all());
        return redirect()->route('reposos.show', $peoples->id)->with('info', 'Reposo del titular '.$peoples->people_id.' Almacenado con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reposes = Repose::findOrFail($id);
        return view('admin.reposes.show', compact('reposes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        $repose = Repose::findOrFail($id);
        return view('admin.reposes.edit', compact('repose', 'peoples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repose $repose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repose $repose)
    {
        //
    }
}
