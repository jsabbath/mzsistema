@extends('administrador.plantillas.main')
@section('titulo', 'Panel de Usuarios')
@section('contenido')
<div class="container">
	<a  class="btn waves-effect waves-light grey darken-4 tooltipped" data-position="right" data-delay="50" data-tooltip="Crear Nuevo" href="{{ route('administrador.users.create') }}"><i class="material-icons" >add</i></a>

  
</div>
	<table class="container s12 z-depth-2 highlight centered grey lighten-2">
        <thead>
          <tr class="grey darken-2">
              <th data-field="id">ID</th>
              <th data-field="nombre">Nombre</th>
              <th data-field="departamento">Departamento</th>
              <th data-field="estado">Estado</th>
              <th data-field="nivel">Nivel de administración</th>
              <th data-field="opciones">Opciones</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($users as $user)
	          <tr>
	            <td>{{ $user->id }}</td>
	            <td>{{ $user->name }}</td>
	          @foreach($departamentos as $departamento)
                @if($departamento->id == $user->departamento_id)
                  <td>{{ $departamento->nombre }}</td>
                @endif
              @endforeach
        @if( $user->estado == 'activo' )  
  				<td class="green-text">{{ $user->estado }}</td>
        @else
          <td class="red-text">{{ $user->estado }}</td>
				@endif
        <td>{{ $user->nivel }}</td>
                <td> 
	            	<a  href="{{ route('administrador.users.destroy', $user->id) }}" class="btn red darken-4 waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar" onclick="return confirm('¿Está seguro de eliminar este registro?')" ><i class="material-icons">delete</i></a>
					      <a href="{{ route('administrador.users.edit', $user->id) }}" class="btn waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" ><i class="material-icons">mode_edit</i></a>
	            </td>
	          </tr>
          	@endforeach
        </tbody>
      </table>
      <div class="center">
      {!! $users->render() !!}
      </div>
@endsection