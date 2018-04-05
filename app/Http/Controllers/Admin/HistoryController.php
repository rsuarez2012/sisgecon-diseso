<?php

namespace App\Http\Controllers\Admin;

use App\History;
use App\People;
use App\Dependency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryStoreRequest;
use App\Http\Requests\HistoryUpdateRequest;

class HistoryController extends Controller
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
        $histories = History::all();
        return view('admin.histories.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = ['SI' => 'SI', 'NO' => 'NO'];
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        return view('admin.histories.create', compact('peoples', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoryStoreRequest $request)
    {
        //$da = $request->all();
        //dd($da);
        $history = History::create($request->all());
        return redirect()->route('historias.index', $history->id)->with('info', 'Historia Almacenado con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        $dependencies = Dependency::orderBy('id', 'ASC')->get()->pluck('dependency', 'id');
        $history = History::findOrFail($id);
        
        //dd($pru);
        return view('admin.histories.show', compact('history', 'peoples', 'options'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        $history = History::findOrFail($id);
        
        
        return view('admin.histories.edit', compact('history', 'peoples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(HistoryUpdateRequest $request, $id)
    {
        $history = History::findOrFail($id);
        //$history = History::find($id)->update($request->all());
        //$history::find($id)->update($request->all());
        $history->fill($request->all())->save();
        return redirect()->route('historias.show', $history->id)->with('info', 'Historia Editada con Exito.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
