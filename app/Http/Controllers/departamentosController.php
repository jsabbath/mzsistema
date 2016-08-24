<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use Session;
use App\Http\Requests;

class departamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = departamento::orderBy('id', 'ASC')->paginate(15);
        return view('administrador.departamentos.index')->with('departamentos', $departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('administrador.departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new departamento($request->all());
        $departamento->save();
        Session::flash('save',$departamento->nombre.' se ha creado con exito');
        return redirect()->route('administrador.departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = departamento::find($id);
        return view('administrador.departamentos.edit')->with('departamento', $departamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamento = departamento::find($id);
        $departamento->nombre= $request->nombre;
        $departamento->save();
        Session::flash('update', $departamento->nombre.' se ha actualizado correctamente');
        return redirect()->route('administrador.departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = departamento::find($id);
        #$departamento->delete();
        Session::flash('delete', $departamento->nombre.' se ha eliminado correctamente');
        return redirect()->route('administrador.departamentos.index');
    }
}
