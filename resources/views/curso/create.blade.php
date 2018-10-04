@extends('layouts.app')

@section('title','Cursos Create')

@section('content')
	<!-- se hizo el formulario utilizando laravel collective -->
	<!-- aca va la validacion -->
	@include('common.error')
	@include('common.success')
	{!! Form::open(['route' => 'curso.store', 'method' => 'POST', 'files'=>true]) !!}
			@include('curso.form')
		{!! Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
		
	{!! Form::close() !!}
	<!--
		 {{csrf_field()}}


@endsection

