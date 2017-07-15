@extends('master')

@section('contenido')
 <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
<form action="{{url('/actualizarCliente')}}/{{$cliente->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required id="N" value="{{$cliente->nombre}}">
	</div>
	<div class="form-group">
		<label for="correo">Correo:</label>
		<input type="text" class="form-control" name="correo" required id="C" value="{{$cliente->correo}}">
	</div>
	<div class="form-group">
		<label for="fecha_nacimiento">Fecha de nacimiento:</label>
		<input type="date" class="form-control" name="fecha_nacimiento" id="selectFecha" required value="{{$cliente->fecha_nacimiento}}">
	</div>
	<div class="form-group">
		<label for="sexo">Sexo:</label>
		<select placeholder="Seleccione una opción"  name="sexo" class="form-control" id="selectSexo">
		<option value="" disabled="" selected="">Seleccione una opción</option>
			@if($cliente->sexo==0)
				<option value=0 selected="">F</option>
			@elseif($cliente->sexo==1)
				<option value=1 selected="">M</option>
			@endif
			<option value=0>F</option>
			<option value=1>M</option>
		</select>
	</div>
	<div class="form-group">
		<label for="ocupacion">Ocupación:</label>
		<select name="ocupacion" class="form-control" id="selectOcupacion2">
			<option value="" disabled="" selected="">Seleccione una opción</option>
			@if($cliente->ocupacion==0)
				<option value=0 selected="">Estudiante</option>
			@elseif($cliente->ocupacion==1)
				<option value=1 selected="">Maestro</option>
			@elseif($cliente->ocupacion==2)
				<option value=2 selected="">Abogado</option>
			@elseif($cliente->ocupacion==3)
				<option value=3	selected="">Ingeniero</option>
			@elseif($cliente->ocupacion==4)
				<option value=4 selected="">Otro</option>
			@endif
			<option value=0>Estudiante</option>
			<option value=1>Maestro</option>
			<option value=2>Abogado</option>
			<option value=3>Ingeniero</option>
			<option value=4>Otro</option>
		</select>
	</div>
	<div>
		<button type:"submit" class="btn btn-primary" id="btnRegistrar">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger" id="btnCancelar">Cancelar</a>
	</div>
</form>
@stop