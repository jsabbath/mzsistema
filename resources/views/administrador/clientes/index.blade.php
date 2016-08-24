@extends('administrador.plantillas.main')
@section('titulo', 'Panel de clientes')
@section('contenido')
<div class="container">
	<a  class="btn waves-effect waves-light grey darken-4 tooltipped" data-position="right" data-delay="50" data-tooltip="Crear Nuevo" href="{{ route('administrador.clientes.create') }}"><i class="material-icons" >add</i></a>

  
</div>
	<table class="container s12 z-depth-2 highlight centered grey lighten-2">
        <thead>
          <tr class="grey darken-2">
              <th data-field="id">ID</th>
              <th data-field="nombre">Cliente</th>
              <th data-field="departamento">Departamento</th>
              <th data-field="estado">Tarifa</th>
              <th data-field="nivel">Responsable</th>
              <th data-field="opciones">Opciones</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($clientes as $cliente)
	          <tr>
	            <td>{{ $cliente->id }}</td>
	            <td>{{ $cliente->nombre }}</td>
	          @foreach($departamentos as $departamento)
                @if($departamento->id == $cliente->departamento_id)
                  <td>{{ $departamento->nombre }}</td>
                @endif
              @endforeach
  				<td>{{ $cliente->valor }} $</td>
        		<td>{{ $cliente->responsable }}</td>
                <td> 
	            	<a  href="{{ route('administrador.clientes.destroy', $cliente->id) }}" class="btn red darken-4 waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar" onclick="return confirm('¿Está seguro de eliminar este registro?')" ><i class="material-icons">delete</i></a>
					      <a href="{{ route('administrador.clientes.edit', $cliente->id) }}" class="btn waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" ><i class="material-icons">mode_edit</i></a>
	            </td>
	          </tr>
          	@endforeach
        </tbody>
      </table>
      <div class="center">
      {!! $clientes->render() !!}
      </div>
@endsection