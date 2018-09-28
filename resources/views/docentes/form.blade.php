		<div class="form-group">
			{!! Form::label('documento','Documento') !!}
			{!! Form::text('documento',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nombres','Nombres') !!}
			{!! Form::text('nombres',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos','Apellidos') !!}
			{!! Form::text('apellidos',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('avatar','Avatar') !!}
			{!! Form::file('avatar') !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug','Slug') !!}
			{!! Form::text('slug',null,['class'=>'form-control']) !!}
		</div>