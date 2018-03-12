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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function show(occupationalHistory $occupationalHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(occupationalHistory $occupationalHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, occupationalHistory $occupationalHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\occupationalHistory  $occupationalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(occupationalHistory $occupationalHistory)
    {
        //
    }
}
