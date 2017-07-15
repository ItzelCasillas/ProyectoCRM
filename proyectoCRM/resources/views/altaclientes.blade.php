@extends('master')

@section('contenido')
  <link rel="stylesheet" href="{{asset("css/estilos.css")}}">

  <br>
<form action="{{url('/guardarCliente2')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
	<div class="form-group">
		<label for="correo">Correo:</label>
		<input type="text" class="form-control" name="correo" required>
	</div>
	<div class="form-group">
		<label for="fecha_nacimiento">Fecha de nacimiento:</label>
		<input type="date" class="form-control" name="fecha_nacimiento" required id="selectFecha">
	</div>
	<div class="form-group">
		<label for="sexo">Sexo:</label>
		<select placeholder="Seleccione una opción"  name="sexo" class="form-control" id="selectSexo">
		<option value="" disabled="" selected="">Seleccione una opción</option>
			<option value=0>F</option>
			<option value=1>M</option>
		</select>
	</div>
	<div class="form-group">
		<label for="ocupacion">Ocupacion:</label>
		<select name="ocupacion" class="form-control" id="selectOcupacion2">
			<option value="" disabled="" selected="">Seleccione una opción</option>
			<option value="0">Estudiante</option>
			<option value="1">Maestro</option>
			<option value="2">Abogado</option>
			<option value="3">Ingeniero</option>
			<option value="4">Otro</option>
		</select>
	</div>
	
	<div> <br>
		<button type:"submit" class="btn btn-primary" id="btnRegistrar">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger" id="btnCancelar">Cancelar</a>
	</div>
</form>
@stop