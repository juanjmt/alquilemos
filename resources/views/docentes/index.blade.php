@extends('layouts.app')

@section('title','Docentes List')

@section('content')
	<div class="row">
		@foreach($docentes as $docente)
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 70px;">
				  <img class="card-img-top rounded-circle mx-auto" src="images/{{$docente->avatar}}" style="width: 100px; height: 100px; background-color: #EFEFEF; margin: 20px;" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title"> {{$docente->nombres}} {{$docente->apellidos}} </h5>
				    <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				     </p>
				    <a href="/docente/{{$docente->slug}}" class="btn btn-primary"> Ver mas </a>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection