<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\occupationalHistory;
use App\People;

class OccupationalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupatinals = occupationalHistory::all();
        return view('admin.occupational_histories.index', compact('occupatinals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        return view('admin.occupational_histories.create', compact('peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $occupational = occupationalHistory::create($request->all());
        //dd($occupational);
        return redirect()->route('historia_ocupacional.edit', $occupational->id)->with('info', 'Historia Ocupacional Almacenado con Exito.!');
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        $occupational = occupationalHistory::findOrFail($id);
        
        
        return view('admin.occupational_histories.edit', compact('occupational', 'peoples'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
