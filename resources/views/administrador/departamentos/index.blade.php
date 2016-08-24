@extends('administrador.plantillas.main')
@section('titulo')
	Lista de Departamentos
@endsection
@section('contenido')
<div class="container">
	<a  class="btn waves-effect waves-light grey darken-4 tooltipped" data-position="right" data-delay="50" data-tooltip="Crear Nuevo" href="{{ route('administrador.departamentos.create') }}"><i class="material-icons" >add</i></a>

  
</div>
	<table class="container s12 z-depth-2 highlight centered grey lighten-2">
        <thead>
          <tr class="grey darken-2">
              <th data-field="id">ID</th>
              <th data-field="name">Nombre del Departamento</th>
              <th data-field="opciones">Opciones</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($departamentos as $departamento)
	          <tr>
	            <td>{{ $departamento->id }}</td>
	            <td>{{ $departamento->nombre }}</td>
	            <td> 
	            	<a  href="{{ route('administrador.departamentos.destroy', $departamento->id) }}" class="btn red darken-4 waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar" onclick="return confirm('¿Está seguro de eliminar este registro?')" ><i class="material-icons">delete</i></a>
					      <a href="{{ route('administrador.departamentos.edit', $departamento->id) }}" class="btn waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" ><i class="material-icons">mode_edit</i></a>
	            </td>
	          </tr>
          	@endforeach
        </tbody>
      </table>
      <div class="center">
      {!! $departamentos->render() !!}
      </div>
@endsection