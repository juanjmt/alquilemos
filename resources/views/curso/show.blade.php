@extends('layouts.app')

@section('title','Listado de Cursos')

@section('content')
	@include('common.error')
	@include('common.success')
	
	<div class="row">
		<img class="mx-auto" src="/images/{{$curso->logo}}" style="width: 250px; height: 250px;  margin: 20px;" >
	</div>
	<div class="row">
		{{$curso->nombre}} - {{$curso->descripcion}} - {{$curso->duracion}}
	</div>
	<div class="row">
		{{$curso->descripcion}}
	</div>
	<div class="row">
		{{$curso->temas}}
	</div>
	<div class="row">
		<div class="col-sm">
			<a href="/curso/{{$curso->id}}/edit" class="btn btn-primary text-center"> Editar </a>
		</div>
		<div class="col-sm">
			{!! Form::open(['route'=>['curso.destroy',$curso->id],'method'=>'DELETE']) !!}
				{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection