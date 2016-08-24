@extends('administrador.plantillas.main')
@section('titulo', 'Crear Caso')
@section('contenido')
<br>
  <div class="row container">
    {!! Form::open(['route'=>'administrador.casos.store', 'method' => 'POST', 'class' => 'col s12']) !!}
    <div class="row">
      <div class="input-field col s12">
          <input name="nombre" type="text" id="nombre">
          <label for="nombre">Nombre del caso</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <select name="pago">
              <option value="" disabled selected>Seleccione el tipo de tarifa</option>
              <option value="FEE">FEE</option>
              <option value="ACUMULAR">ACUMULAR</option>
              <option value="FACTURAR">FACTURAR</option>
              <option value="INFORME">INFORME</option>
              <option value="TRAMITE">TRAMITE</option>
        </select>
        <label>Tipo de pago</label>
      </div>

      <div class="input-field col s6">
        <select name="cliente_id">
            <option value="" disabled selected>Seleccione el cliente</option>
            @foreach($clientes as $cliente)
              <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
            @endforeach  
        </select>
        <label>Cliente</label>
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