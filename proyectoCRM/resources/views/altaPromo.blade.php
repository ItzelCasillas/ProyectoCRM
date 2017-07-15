@extends('master')

@section('contenido')
  <link rel="stylesheet" href="{{asset("css/estilos.css")}}">

  <br>
<form action="{{url('/guardarPromo')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required>
	</div>
	<div class="form-group">
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" class="form-control" name="fecha_inicio" required id="selectFecha">
	</div>
	<div class="form-group">
		<label for="fecha_termino">Fecha de termino:</label>
		<input type="date" class="form-control" name="fecha_termino" required id="selectFecha">
		
	</div>
	<div> <br>
		<button type:"submit" class="btn btn-primary" id="btnRegistrar">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger" id="btnCancelar">Cancelar</a>
	</div>
</form>
@stop