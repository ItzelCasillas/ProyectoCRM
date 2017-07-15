@extends('master')

@section('contenido')
<link rel="stylesheet" href="{{asset("css/estilos.css")}}">
<br>
<br>
<div class="form-group">
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Fecha de inicio</th>
			<th>Fecha de termino</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($promociones as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->descripcion}}</td>
			<td>{{$p->fecha_inicio}}</td>
			<td>{{$p->fecha_termino}}</td>
			<td>
				<a href="{{url('/editarPromo')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden=true></span>
				</a>
				<a href="{{url('/eliminarPromo')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-trash" aria-hidden=true></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop