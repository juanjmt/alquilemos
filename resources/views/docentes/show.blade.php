@extends('layouts.app')

@section('title','Docentes List')

@section('content')
	<div class="row">
		<img class="rounded-circle mx-auto" src="/images/{{$docente->avatar}}" style="width: 250px; height: 250px; background-color: #EFEFEF; margin: 20px;" >
	</div>
	<div class="row">
		<h3> {{$docente->nombres}} {{$docente->apellidos}} </h3>
		
	</div>
	<div class="row">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="/docente/{{$docente->slug}}/edit" class="btn btn-primary text-center"> Editar </a>
	</div>
@endsection