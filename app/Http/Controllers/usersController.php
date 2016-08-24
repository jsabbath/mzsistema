<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Requests\userRequest;
use App\User;
use App\departamento;
use Session;
use App\Http\Requests;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = departamento::orderBy('nombre', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->paginate(15);
        return view('administrador.users.index')->with('users', $users)->with('departamentos', $departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = departamento::orderBy('nombre', 'ASC')->get();
        return view('administrador.users.create')->with('departamentos', $departamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(userRequest $request)
    {
        $User = new User($request->all());
        $User->name = $request->name." ".$request->apellido;
        if ($User->estado == 'on') {
            $User->estado = 'activo';
        }else{
            $User->estado = 'inactivo';
        }
        if ($User->nivel == 'on') {
            $User->nivel = 'administrador';
        }else{
            $User->nivel = 'miembro';
        }
        $User->password = bcrypt($User->password);
        $User->save();
        Session::flash('save',$User->name.' se ha creado con exito');
        return redirect()->route('administrador.users.index');
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
        $User = User::find($id);
        return view('administrador.users.edit')->with('departamentos', $departamentos)->with('User', $User);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(userRequest $request, $id)
    {
        if ($request->estado == 'on') {
            $request->estado = 'activo';
        }else{
            $request->estado = 'inactivo';
        }
        if ($request->nivel == 'on') {
            $request->nivel = 'administrador';
        }else{
            $request->nivel = 'miembro';
        }
        $request->password = bcrypt($request->password);
        $User = User::find($id);
        $User->name= $request->name;
        $User->email= $request->email;
        $User->password= $request->password;
        $User->departamento_id= $request->departamento_id;
        $User->nivel= $request->nivel;
        $User->estado= $request->estado;
        $User->save();
        Session::flash('update', $User->name.' se ha actualizado correctamente');
        return redirect()->route('administrador.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        #$User->delete();
        Session::flash('delete', $User->name.' se ha eliminado correctamente');
        return redirect()->route('administrador.users.index');
    }
}
