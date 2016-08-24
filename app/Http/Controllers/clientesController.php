<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\departamento;
use Session;
use App\Http\Requests;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = departamento::orderBy('nombre', 'ASC')->get();
        $clientes = cliente::orderBy('id', 'ASC')->paginate(15);
        return view('administrador.clientes.index')->with('clientes', $clientes)->with('departamentos', $departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = departamento::orderBy('nombre', 'ASC')->get();
        return view('administrador.clientes.create')->with('departamentos', $departamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new cliente($request->all());
        $cliente->save();
        Session::flash('save',$cliente->nombre.' se ha creado con exito');
        return redirect()->route('administrador.clientes.index');
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
        $departamentos = departamento::orderBy('nombre', 'ASC')->get();
        $cliente = cliente::find($id);
        return view('administrador.clientes.edit')->with('departamentos', $departamentos)->with('cliente', $cliente);
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
        $cliente = cliente::find($id);
        $cliente->nombre= $request->nombre;
        $cliente->pais= $request->pais;
        $cliente->valor= $request->valor;
        $cliente->departamento_id= $request->departamento_id;
        $cliente->responsable= $request->responsable;
        $cliente->save();
        Session::flash('update', $cliente->nombre.' se ha actualizado correctamente');
        return redirect()->route('administrador.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        #$cliente->delete();
        Session::flash('delete', $cliente->nombre.' se ha eliminado correctamente');
        return redirect()->route('administrador.clientes.index');
    }
}
