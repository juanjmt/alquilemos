@extends('layouts.app')

@section('title','Docentes Create')

@section('content')
	<form class="form-group" action="/docente" method="POST">
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
		<button type="submit" class="btn btn-primary" style="text-align: center;">Save</button>
	</form>

@endsection

<!--
<!DOCTYPE html>
<html>
<head>
	<title>Academic</title>

</head>
<body>
	<div class="container">
		
	</div>

</body>
</html>-->