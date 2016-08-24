@extends('administrador.plantillas.main')
@section('titulo', 'Editar Usuario')
@section('contenido')
<br>
  <div class="row container">
    {!! Form::open(['route'=>['administrador.users.update', $User], 'method' => 'PUT', 'class' => 'col s12']) !!}
  <div class="row">
      <div class="input-field col s12">
          <input name="name" id="name" type="text" value= "{{ $User->name }}">
          <label for="name">Nombre</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input name="password1" type="password" id="password1">
            <label for="password1">Contraseña</label>
      </div>
        <div class="input-field col s6">
            <input name="password" type="password" id="password">
            <label for="password">Introdusca de nuevo la contraseña</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value= "{{ $User->email }}">
          <label for="email">Email</label>
        </div>
    </div>
  <div class="row">
    <div class="input-field col s6">
        <select name="departamento_id" id="departamento_id">
            <option value="" disabled selected>Seleccione su departamento</option>
              @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
              @endforeach  
        </select>
        <label>Departamento</label>
    </div>
        <div class="switch col s3">
        <label>
            Inactivo
            <input type="checkbox" name="estado">
            <span class="lever"></span>
            Activo
        </label>
    </div>
        <div class="switch col s3">
        <label>
            Miembro
            <input type="checkbox" name="nivel">
            <span class="lever"></span>
            Administrador
        </label>
    </div>
    </div>

      <div class="center">
    <button class="btn waves-effect waves-light red darken-3" type="submit" name="action">
      Crear<i class="material-icons right">send</i>
    </button>
    </div>
    {!! Form::close() !!}
  </div>
<br>
<br>
<br>
<br>
@endsection