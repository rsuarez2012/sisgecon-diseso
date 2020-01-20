<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReposeStoreRequest;
use App\Http\Requests\ReposeUpdateRequest;
use App\Executive;
use App\Repose;
use App\Communication;
use App\People;
use App\Dependency;
use Carbon\Carbon;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communications = Communication::orderBy('id', 'DESC')->get();
        return view('admin.communications.index', compact('communications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencies = Dependency::where('trades', '0')->get()->pluck('info', 'id');
        $executive = Executive::where('status', '1')->get()->pluck('full_name', 'id');
        return view('admin.communications.communication', compact('dependencies', 'executive'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(ReposeStoreRequest $request)
    public function store(Request $request)
    {

        //dd($request->all());
       //$communication = Communication::create($request->all());
        $number_com = Communication::all();
        $numberx = $number_com->last() + 1;
        $communication = new Communication;
        $communication->dependency_id = $request->dependency_id;
        $communication->director_id = $request->director_id;
        $communication->affair = $request->affair;
        $communication->date = $request->date;
        $communication->body = $request->body;
        $communication->number = $numberx;
        $communication->annexed = $request->annexed;
        $communication->communucation_type = '1';
        $communication->save();
        return redirect()->route('memorandos.show', $communication->id)->with('info', 'Se ha creado el Memorando numero '.$communication->number.' con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $communication = Communication::findOrFail($id);
        //$communication = Communication::where('id', $id)->get();
        //dd($communication->executive);
        return view('admin.communications.show', compact('communication'));
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
    public function update(ReposeStoreRequest $request, $id)
    {
        $repose = Repose::findOrFail($id);
    
        $repose->fill($request->all())->save();
        return redirect()->route('reposos.show', $repose->id)->with('info', 'El reposo del titular: ' . $repose->people->full_name . ' Fue Editado correctamente.!');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $repose = Repose::findOrFail($id);
        $repose->delete();
        //return redirect()->route('reposos.index')->with('info','El reposo del titular: ' . $repose->people->full_name . ' Fue Eliminado correctamente.!');
        return redirect()->action('Admin\ReposeController@index')->with('info', 'El reposo del titular: ' . $repose->people->full_name . ' Fue Eliminado correctamente.!');
    }
}
