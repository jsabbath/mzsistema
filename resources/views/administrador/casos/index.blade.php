@extends('administrador.plantillas.main')
@section('titulo', 'Panel de casos')
@section('contenido')
<div class="container">
	<a  class="btn waves-effect waves-light grey darken-4 tooltipped" data-position="right" data-delay="50" data-tooltip="Crear Nuevo" href="{{ route('administrador.casos.create') }}"><i class="material-icons" >add</i></a>

  
</div>
	<table class="container s12 z-depth-2 highlight centered grey lighten-2">
        <thead>
          <tr class="grey darken-2">
              <th data-field="id">ID</th>
              <th data-field="nombre">Caso</th>
              <th data-field="cliente">Cliente</th>
              <th data-field="estado">Tarifa</th>
              <th data-field="opciones">Opciones</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($casos as $caso)
	          <tr>
	            <td>{{ $caso->id }}</td>
	            <td>{{ $caso->nombre }}</td>
	          @foreach($clientes as $cliente)
                @if($cliente->id == $caso->cliente_id)
                  <td>{{ $cliente->nombre }}</td>
                @endif
              @endforeach
  				      <td>{{ $caso->pago }}</td>
                <td> 
	            	<a  href="{{ route('administrador.casos.destroy', $caso->id) }}" class="btn red darken-4 waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar" onclick="return confirm('¿Está seguro de eliminar este registro?')" ><i class="material-icons">delete</i></a>
					      <a href="{{ route('administrador.casos.edit', $caso->id) }}" class="btn waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" ><i class="material-icons">mode_edit</i></a>
	            </td>
	          </tr>
          	@endforeach
        </tbody>
      </table>
      <div class="center">
      {!! $casos->render() !!}
      </div>
@endsection