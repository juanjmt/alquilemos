@extends('layouts.app')

@section('title','Listado de cursos')

@section('content')
	@include('common.error')
	@include('common.success')
	<div class="row">
		@foreach($curso as $curso)
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
				  <a href="/curso/{{$curso->id}}"> <img class="card-img-top"  src="/images/{{$curso->logo}}" height="200" alt="Card image cap"> </a>
				  <div class="card-body">
				    <p class="card-text">
				    	{{$curso->nombre}} - {{$curso->duracion}}
				    </p>
				    <p class="card-text">
				    	{{$curso->descripcion}}
				    </p>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection