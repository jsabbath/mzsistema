@extends('administrador.plantillas.main')
@section('titulo')
	Edición de Departamento
@endsection

@section('contenido')
<br>
<br>
<br>
<br>
<br>
  <div class="row">
  	{!! Form::open(['route'=>['administrador.departamentos.update', $departamento], 'method' => 'PUT', 'class' => 'col s12']) !!}
      
      <div class="container row">
        <div class="input-field col s12">
          <input id="departamento" type="text" name="nombre" value= "{{ $departamento->nombre }}">
          <label for="departamento">Departamento</label>
        </div>
      </div>
      <div class="center">
	  <button class="btn waves-effect waves-light red darken-3" type="submit" name="action" onclick="swal('hola', 'hola bb', 'success', );">Editar
	    <i class="material-icons right">send</i>
	  </button>
	  </div>
    {!! Form::close() !!}
  </div>
      <br>
      <br>
      <br>
      <br>
@endsection