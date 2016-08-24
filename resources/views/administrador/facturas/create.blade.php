@extends('administrador.plantillas.main')
@section('titulo', 'Crear Factura')
@section('contenido')
<br>
  <div class="row container">
    {!! Form::open(['route'=>'administrador.facturas.store', 'method' => 'POST', 'class' => 'col s12']) !!}
    <div class="row">
      <div class="input-field col s6">
      <i class="material-icons prefix">perm_contact_calendar</i>
          <input type="date" class="datepicker" name="fecha" id="fecha">
          <label for="fecha">Fecha</label>
      </div>
      <div class="input-field col s1">
        <label for="tiempo"> Tiempo</label>
      </div>
      <div class="input-field col s5">
          <input type="time" name="tiempo" id="tiempo" />
      </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">message</i>
          <textarea id="descripcion" class="materialize-textarea" name="descripcion"></textarea>
          <label for="descripcion">Descripción de la facturación</label>
        </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">store</i>
          <select name="cliente_id">
              <option value="" disabled selected>Seleccione el cliente</option>
              @foreach($clientes as $cliente)
	            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
	          @endforeach
          </select>
          <label>Cliente</label>
      </div>

      <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <select name="caso_id">
              <option value="" disabled selected>Seleccione el caso</option>
              @foreach($casos as $caso)
	            <option value="{{ $caso->id }}">{{ $caso->nombre }}</option>
	          @endforeach
          </select>
          <label>Caso</label>
      </div>
        
    </div>

    <div class="center">
      <button class="btn waves-effect waves-light red darken-3" type="submit" name="action">
        Guardar<i class="material-icons right">send</i>
      </button>
    </div>
    {!! Form::close() !!}
  </div>
<br>
<br>
<br>
<br>
<script type="text/javascript">
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>
@endsection