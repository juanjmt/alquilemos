@extends('layouts.app')

@section('title','Curso Edit')

@section('content')
	@include('common.error')
	@include('common.success')
	{!! Form::model($curso,['route' => ['curso.update',$curso],  'method' => 'PUT', 'files'=>true]) !!}
		@include('curso.form')
		{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		
	
	{!! Form::close() !!}
@endsection

