<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\caso;
use Session;
use App\Http\Requests;

class casosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::orderBy('nombre', 'ASC')->get();
        $casos = caso::orderBy('id', 'ASC')->paginate(15);
        return view('administrador.casos.index')->with('clientes', $clientes)->with('casos', $casos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = cliente::orderBy('nombre', 'ASC')->get();
        return view('administrador.casos.create')->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caso = new caso($request->all());
        $caso->save();
        Session::flash('save',$caso->nombre.' se ha creado con exito');
        return redirect()->route('administrador.casos.index');
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
        $clientes = cliente::orderBy('nombre', 'ASC')->get();
        $caso = caso::find($id);
        return view('administrador.casos.edit')->with('caso', $caso)->with('clientes', $clientes);
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
        $caso = caso::find($id);
        $caso->nombre= $request->nombre;
        $caso->pago= $request->pago;
        $caso->save();
        Session::flash('update', $caso->nombre.' se ha actualizado correctamente');
        return redirect()->route('administrador.casos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caso = caso::find($id);
        #$caso->delete();
        Session::flash('delete', $caso->nombre.' se ha eliminado correctamente');
        return redirect()->route('administrador.casos.index');
    }
}
