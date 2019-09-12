@extends('layouts.app')

@section('content')

<div class="container">

<<<<<<< HEAD

=======
<!--Seccion que mediante el llenado de un formulario, permite editar una encuesta.
	Posteriormente, los datos son enviados mediante el método POST a la url "/encuestas/{ID}"-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<form action="{{ url('/encuestas/'.$encuesta->id_encuesta) }}" class="form-horizontal" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
	<div class="form-group">
		<label for="asunto" class="control-label">{{'Asunto'}}</label>
		<input type="text" class="form-control" name="asunto" id="asunto" value="{{ $encuesta->asunto}}">
	</div>


	<div class="form-group">
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label>
<<<<<<< HEAD
		<input type="text" class="form-control" name="codigoCurso" id="codigoCurso" value="{{ $encuesta->codigoCurso}}">
	</div>
	
=======
<<<<<<< HEAD
		<input type="text" class="form-control" name="codigoCurso" id="codigoCurso" value="{{ $encuesta->codigoCurso}}">
=======
		<select name="codigoCurso" size="1" style="
			    display: block;
				width: 100%;
    			height: calc(2.19rem + 2px);
				padding: .375rem .75rem;
				font-size: .9rem;
				line-height: 1.6;
				color: #495057;
				background-color: #fff;
				background-clip: padding-box;
				border: 1px solid #ced4da;
				border-radius: .25rem;">
			<option selected> Elige un Curso </option>
			@foreach($datos as $dato)
				<option value="{{$dato->codigo_curso}}">{{$dato->codigo_curso}}</option>
			@endforeach
		</select>
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
	</div>

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

	<div class="form-group">
		<label for="rutProfesor" class="control-label">{{'Rut Profesor'}}</label>
		<input type="text" class="form-control" name="rutProfesor" id="rutProfesor" value="{{ $encuesta->rutProfesor}}" readonly="readonly">
	</div>
<<<<<<< HEAD
	<input type="submit" class="btn btn-success" value="Modificar">
	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>
=======
	<input type="submit" class="btn btn-success" value="Modificar ✍">
	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

</form>
</div>

@endsection