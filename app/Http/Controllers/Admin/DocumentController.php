<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReposeStoreRequest;
use App\Repose;
use App\People;
use Carbon\Carbon;
use App\Document;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples = People::orderBy('id', 'ASC')->get()->pluck('full_name', 'id');
        return view('admin.documents.create', compact('peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = People::findOrFail($request->input('people_id'));
        $document = Document::create($request->all());
        //$file = $request->file('document');
        //dd($request->file('file'));
        $rules = [
            'people_id' => 'required|unique:documents'
        ];
        //Mesajes de validacion
        $messages = [
            'people_id.required' => 'Debe ingresar el titular!',
            'people_id.unique' => 'El titular ya tiene documentacion registrada!',
        ];
        if($request->has('file'))
        {
            request()->validate([
                'file' => 'required|mimes:pdf,png,jpg,jpeg,gif,svg|max:2048',
            ]);
            /*$peopleFile = $people->id.time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('expedientes/'.$people->id.'/'), $peopleFile);
            $file = 'expedientes/'.$people->id.'/'.$peopleFile;
            $people->file = $file;
            $people->save();*/
            $documentFile = $people->id;
            $nombre = $documentFile.'-'.request()->file->getClientOriginalName();
            //request->file->move('expediente', $nombre);
            $document->file = $request->file('file')->move('expedientes', $nombre);//file es el nombre del input 

        }
        $this->validate($request, $rules, $messages);
        $document->save();
        return 'listo';
        //$peoples = Repose::create(
        //    $request->all()
        //);
        //return redirect()->route('reposos.show', $peoples->id)->with('info', 'Reposo del titular '.$peoples->people_id.' Almacenado con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repose  $repose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = Document::findOrFail($id);
        return view('admin.documents.show', compact('documento'));
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
    public function destroy($id)
    {
        $repose = Repose::findOrFail($id);
        $repose->delete();
        return redirect()->route('reposos.index')->with('info','El reposo del titular: ' . $repose->people->full_name . ' Fue Eliminado correctamente');
    }
}
