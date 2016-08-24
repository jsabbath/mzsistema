<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> @yield('titulo', 'Sistema de facturacion')| Panel de administracion</title>
</head>
<body class="">
<nav>
    <div class="nav-wrapper grey darken-4 row" >
    <p class="col s1"></p>
    <a href="http://www.lmzabogados.com">
      <img src="https://lmzabogados-my.sharepoint.com/personal/sistemas_lmzabogados_com/_layouts/15/guestaccess.aspx?guestaccesstoken=5VmWgfZ%2fRW1cOKPkihv6H6wwx4rUR9Ul6qc7DDXhXQ8%3d&docid=125e8d5ebf1884d0e8e37c01092d35615&rev=1" height=60>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    </a>
        <li><a href="{{ route('administrador.departamentos.index') }}">Departamento</a></li>
        <li><a href="{{ route('administrador.users.index') }}">Abogados</a></li>
        <li><a href="{{ route('administrador.clientes.index') }}">Clientes</a></li>
        <li><a href="{{ route('administrador.casos.index') }}">Casos</a></li>
        <li><a href="#">Facturacion</a></li>
      </ul>
    </div>
  </nav>
  <br>
  @include('administrador.plantillas.mensajes')
  <section>
      @yield('contenido')
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