<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Dependency;


class DependencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencies = Dependency::all();
        return view('admin.dependencies.index', compact('dependencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dependencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dependency = Dependency::create($request->all());
        return redirect()->route('dependencias.index', $dependency->id)->with('info', 'Dependencia Almacenado con Exito.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependency = Dependency::findOrFail($id);
        return view('admin.dependencies.show')->with(compact('dependency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dependency = Dependency::findOrFail($id);
        //dd($people);
        return view('admin.dependencies.edit', compact('dependency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dependency = Dependency::findOrFail($id);
        $dependency->fill($request->all())->save();
        return redirect()->route('dependencias.show', $dependency->id)->with('info', 'Dependencia Editada con Exito.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function destroy(dependency $dependency)
    {
        //
    }
}
