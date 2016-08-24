@extends('administrador.plantillas.main')
@section('titulo', 'Crear cliente')
@section('contenido')
<br>
  <div class="row container">
    {!! Form::open(['route'=>'administrador.clientes.store', 'method' => 'POST', 'class' => 'col s12']) !!}
  <div class="row">
      <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
          <input name="nombre" type="text" id="nombre">
          <label for="nombre">Nombre</label>
      </div>
      <div class="input-field col s6">
      <i class="material-icons prefix">location_on</i>
          <input name="pais" type="text" id="pais">
          <label for="pais">Pais</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">payment</i>
          <input name="valor" type="text" id="valor">
          <label for="valor">Valor de la hora en dolares americanos</label>
      </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">supervisor_account</i>
            <input name="responsable" type="text" id="responsable">
            <label for="responsable">Responsable</label>
        </div>
    </div>
    <div class="row">
	    <div class="input-field col s12">
	    <i class="material-icons prefix">verified_user</i>
	        <select name="departamento_id" id="departamento_id">
	            <option value="" disabled selected>Seleccione un departamento</option>
	              @foreach($departamentos as $departamento)
	                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
	              @endforeach  
	        </select>
	        <label>Departamento</label>
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
<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });
</script>
@endsection