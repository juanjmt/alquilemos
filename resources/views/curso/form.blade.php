		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('duracion','Duración') !!}
			{!! Form::text('duracion',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion','Descripción') !!}
			{!! Form::text('descripcion',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('temas','Temario') !!}
			{!! Form::textarea('temas',null,['class'=>'form-control','rows' => 4, 'cols' => 54,]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('logo','Logo') !!}
			{!! Form::file('logo') !!}
		</div>