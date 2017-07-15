
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistema de Administración de Clientes</title>
  <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
  <link rel="stylesheet" href="assets/css/main.css" />
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body id="cuerpo">


  <nav class="navbar navbar-default" id="menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/master">
      <img src="{{asset("images/mazda-logo3.png")}}" id="logo">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clientes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarCliente')}}">Alta Clientes</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/consultarClientes')}}">Consultar Clientes</a></li>
          </ul>
        </li>
      </ul>
<ul class="nav navbar-nav">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Promociones<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarPromo')}}">Alta promoción</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/consultarPromociones')}}">Consultar promociones</a></li>
          </ul>
        </li>
</ul>
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        </a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container"  id="hola">
  <div class="row">
    <div class="col-xs-12">
    @yield('contenido')
    </div>
  </div>
</div>
<br>
<footer id="footer1" class="text-center">
        <ul class="icons">
          <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
          <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
          <li>&copy; Proyecto CRM | Negocios Electrónicos 2017</li>
        </ul>
      </footer>

<script src="{{asset("js/bootstrap.js")}}"></script>

</body>
</html>
