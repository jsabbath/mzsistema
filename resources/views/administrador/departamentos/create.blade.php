@extends('administrador.plantillas.main')
@section('titulo', 'Crear Departamento')
@section('contenido')
<br>
<br>
<br>
<br>
<br>
  <div class="row">
  	{!! Form::open(['route'=>'administrador.departamentos.store', 'method' => 'POST', 'class' => 'col s12']) !!}
      
      <div class="container row">
        <div class="input-field col s12">
          <input id="nombre" type="text" name="nombre">
          <label for="nombre">Departamento</label>
        </div>
      </div>
      <div class="center">
	  <button class="btn waves-effect waves-light red darken-3" type="submit" name="action">
	  	Crear<i class="material-icons right">send</i>
	  </button>
	  </div>
    {!! Form::close() !!}
  </div>
@endsection