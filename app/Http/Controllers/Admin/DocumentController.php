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
        
        $document = new Document;
        $document->people_id = $request->input('people_id');
        //$document->file = $request->file('file');

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
            $documentFile = $people->id;
            $nombre = $documentFile.'-'.request()->file->getClientOriginalName();
            //$request->file->move('expediente', $nombre);
            $document->file = $request->file('file')->move('expedientes', $nombre);//file es el nombre del input 

        }
        $this->validate($request, $rules, $messages);
        $document->save();
        return redirect()->route('documentos.index')->with('info', 'Documentacion Almacenada con Exito.!');
        
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
        $document = Document::findOrFail($id);
        //dd($document);
        $document->delete();
        //Document::destroy($id);
        return redirect()->route('documentos.index')->with('info','La documentación del titular Fue Eliminado correctamente');
    }
}
