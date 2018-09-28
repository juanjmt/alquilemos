@extends('layouts.app')

@section('title','Docentes Edit')

@section('content')
	{!! Form::model($docente,['route' => ['docente.update',$docente],  'method' => 'PUT', 'files'=>true]) !!}
		@include('docentes.form')
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		
	
	{!! Form::close() !!}
	<!-- 
	<form class="form-group" action="/docente/{{$docente->slug}}" method="POST" enctype="multipart/form-data" >
		{{csrf_field()}}
		{{ method_field('PUT') }}
		 
		<div class="form-group">
			<label for="">Documento:</label>
			<input type="text" class="form-control" name="documento" id="DocDocumento"  value="{{$docente->documento}}" />
		</div>
		<div class="form-group">
			<label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombres" id="nombres"  value="{{$docente->nombres}}"/>
		</div>
		<div class="form-group">
			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos" id="apellidos" value="{{$docente->apellidos}}" />
		</div>
		<div class="form-group">
			<img class="rounded-circle mx-auto" src="/images/{{$docente->avatar}}" style="width: 100px; height: 100px; background-color: #EFEFEF; margin: 20px;" alt="Card image cap">
			<label for="">Avatar:</label>
			<input type="file"  name="avatar" id="avatar" />
		</div>
		<button type="submit" class="btn btn-primary" style="text-align: center;">Update</button>
	</form>

-->

@endsection

