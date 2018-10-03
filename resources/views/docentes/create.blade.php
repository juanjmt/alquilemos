@extends('layouts.app')

@section('title','Docentes Create')

@section('content')
	<!-- se hizo el formulario utilizando laravel collective -->
	<!-- aca va la validacion -->
	@include('common.error')
	@include('common.success')
	{!! Form::open(['route' => 'docente.store', 'method' => 'POST', 'files'=>true]) !!}
			@include('docentes.form')
		{!! Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
		
	{!! Form::close() !!}
	<!--
	<form class="form-group" action="/docente" method="POST" enctype="multipart/form-data" >
		 {{csrf_field()}}
		<div class="form-group">
			<label for="">Documento:</label>
			<input type="text" class="form-control" name="documento" id="DocDocumento" />
		</div>
		<div class="form-group">
			<label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombres" id="nombres" />
		</div>
		<div class="form-group">
			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos" id="apellidos" />
		</div>
		<div class="form-group">
			<label for="">Avatar:</label>
			<input type="file"  name="avatar" id="avatar" />
		</div>
		<button type="submit" class="btn btn-primary" style="text-align: center;">Save</button>
	</form> 

@endsection

