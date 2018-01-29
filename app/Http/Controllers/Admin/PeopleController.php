<?php

namespace App\Http\Controllers\Admin;

use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::orderBy('employee_type')->paginate(10);
        $count = People::count();
        //dd($people);
        return view('admin.peoples.index', compact('people', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peoples.create');
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
        $people = People::create($request->all());
        return redirect()->route('titulares.edit', $people->id)->with('info', 'Titular Almacenado con Exito.!');
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
        $person = People::findOrFail($id);
        //dd($person);
        return view('admin.peoples.show')->with(compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = People::findOrFail($id);
        return view('admin.peoples.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $person = People::findOrFail($id);
        $person->fill($request->all())->save();
        //dd($person);
        //return view('admin.peoples.show')->with(compact('person'));
        return redirect()->route('titulares.show', $person->id)->with('info', 'Titular Editado con Exito.!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peopl = People::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
