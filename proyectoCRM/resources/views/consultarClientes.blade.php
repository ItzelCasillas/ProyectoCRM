@extends('master')

@section('contenido')
<link rel="stylesheet" href="{{asset("css/estilos.css")}}">
<br>
<br>
<div class="form-group">

<form action="{{url('/filtrarOcupacion')}}" class="navbar-form navbar-left" role="search" method="POST">
<input id ="token" type="hidden" name="_token" value="{{csrf_token() }}">

        <div class="form-group" >
        <select name="ocupacion" class="form-control" id="selectFiltro">
		<option value="%" selected="">Seleccione Ocupación</option>
		<option value="0">Estudiante</option>
		<option value="1">Maestro</option>
		<option value="2">Abogado</option>
		<option value="3">Ingeniero</option>
		<option value="4">Otro</option>
	</select>
        </div>

        <div class="form-group" >
    
          <select name="sexo" class="form-control" id="selectFiltro2">
		<option value="%"  selected="">Seleccione Sexo</option>
		<option value="0">F</option>
		<option value="1">M</option>
	</select>
        </div>
        <button type="submit" class="btn btn-default" id="btnBuscar">Buscar</button>
</form> 

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Fecha de nacimiento</th>
			<th>Sexo</th>
			<th>Ocupación</th>
			<th>Opciones</th>

		</tr>
	</thead>
	<tbody>
	<form action="{{url('/enviarPromocion')}}" class="navbar-form navbar-right" id="formPromo" role="search" method="POST">
	@foreach($clientes as $c)
	<input type="hidden" name="correo[]" value="{{$c->correo}}">
	<!-- <input type="hidden" name="nombre[]" value="{{$c->nombre}}"> -->
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombre}}</td>
			<td>{{$c->correo}}</td>
			<td>{{$c->fecha_nacimiento}}</td>
			<td>@if($c->sexo==0)
				<span class="label label-default">F</span>
				@elseif($c->sexo==1)
				<span class="label label-default">M</span>
				@endif
			</td>
			<td>@if($c->ocupacion==0)
				<span class="label label-default">Estudiante</span>
				@elseif($c->ocupacion==1)
				<span class="label label-default">Mestro</span>
				@elseif($c->ocupacion==2)
				<span class="label label-default">Abogado</span>
				@elseif($c->ocupacion==3)
				<span class="label label-default">Ingeniero</span>
				@elseif($c->ocupacion==4)
				<span class="label label-default">Otro</span>
				@endif
			</td>
			
			<td>
				<a href="{{url('/editarCliente')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden=true></span>
				</a>
				<a href="{{url('/eliminarCliente')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-trash" aria-hidden=true></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>


	<input id ="token" type="hidden" name="_token" value="{{csrf_token() }}">

        <div id="divPromo">
                   <select name="promocion" class="form-control" id="selectPromo">
		<option value="%" disabled="" selected="">Seleccione Promoción</option>
		@foreach($promo as $p)

				<option value="{{$p->id}}">{{$p->nombre}}</option>
			@endforeach
	</select>
        </div>
        <button type="submit" class="btn btn-default" id="btnEnviar">Enviar</button>
</form>
@stop