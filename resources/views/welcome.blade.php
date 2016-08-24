<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Sistema M&Z| Panel de administracion</title>
</head>
<body class="">
<nav>
    <div class="nav-wrapper grey darken-4 row" >
    <p class="col s1"></p>
    <a href="http://www.lmzabogados.com">
      <img src="https://lmzabogados-my.sharepoint.com/personal/sistemas_lmzabogados_com/_layouts/15/guestaccess.aspx?guestaccesstoken=5VmWgfZ%2fRW1cOKPkihv6H6wwx4rUR9Ul6qc7DDXhXQ8%3d&docid=125e8d5ebf1884d0e8e37c01092d35615&rev=1" height=60>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    </a>
        <li>Bienvenido al Sistema de Facturación</li>
        <li class="col s1"></li>
      </ul>
    </div>
  </nav>
  <br>
  @include('administrador.plantillas.mensajes')
  <section>
      <br>
  <div class="row container">
  <div class="col s3"></div>
    {!! Form::open(['route'=>'log.store', 'method' => 'POST', 'class' => 'col s6']) !!}
  <div class="row">
      <div class="input-field col s12">
          <input name="email" id="email" type="email" value="{{ old('email') }}">
          <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" id="password" >
            <label for="password">Contraseña</label>
      </div>
    </div>
      <div class="center">
    <button class="btn waves-effect waves-light red darken-3" type="submit" name="action">
      Ingresar<i class="material-icons right">send</i>
    </button>
    </div>
    {!! Form::close() !!}
    <div class="col s3"></div>
  </div>
<br>
<br>
<br>
<br>
  </section>
</body>
<br>
  <br>
  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
      });
  </script>
</html>