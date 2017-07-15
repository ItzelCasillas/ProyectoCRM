
<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<title>CRM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
		<link rel="stylesheet" href="{{asset("css/estilos.css")}}">

	<script src="{{asset("js/jquery-3.2.1.js")}}"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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

      <a class="navbar-brand" href="#">
      <img src="images/mazda-logo3.png" id="logo">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Vehículos <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Accesorios</a></li>
        <li><a href="#">Conócenos</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default" id="buscar">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/master')}}">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>



		<!-- Header -->
				@include('flash::message')
<script type="text/javascript">setTimeout(function(){
      			$(".alert").fadeOut(1500);
      			},1500)</script>
			<header id="header">
				<h1>Registrate</h1> 
				<p>y recibe nuestras promociones<br />
				 
			</header>

		<!-- Signup Form -->
			<form method="post" action="{{url('/guardarCliente')}}">
			<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
			<div class="form-group">
				<input type="text" name="nombre" id="Nombre" placeholder="Nombre" /> 
			</div>
			<br>
			<div class="form-group">
				<input type="text" name="correo" id="email" placeholder="Correo Electrónico" />
			</div>
			<br>
			<div class="form-group">
				<label for="fecha_nacimiento" id="lblFecha">Fecha de nacimiento</label> <br>
				<input type="date" name="fecha_nacimiento" id="fechaN"/>
				<!-- <label for="sexo" id="lblSexo">Sexo</label> -->
				<select id="sexo" name="sexo"> 
				<option disabled="" selected="">Sexo</option>
				<option value=0>F</option>
				<option value=1>M</option>
				</select>
			</div>
			<br>
			<div class="form-group">
			<label for="ocupacion" id="lblFecha">Ocupación</label> <br>
				<select id="selectOcupacion" name="ocupacion">
					<option disabled="" selected="">Selecciona una Opción</option>
					<option value=0>Estudiante</option>
					<option value=1>Maestro</option>
					<option value=2>Abogado</option>
					<option value=3>Ingeniero</option>
					<option value=4>Otro</option>
				</select>
			</div>
			<br>
			<div>
				<input type="submit" value="Registrar" id="btnRegistrar1" />
			</div>
			</form>

		<!-- Footer -->
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

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="{{asset("js/bootstrap.js")}}"></script>
	</body>
</html>