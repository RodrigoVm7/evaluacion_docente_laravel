@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<div class="container">


=======
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/estilo.css">

<div class="container">

<style>
	p {
 		 font-size: 200%;
	}
	.rojo {
 		 color: red;
	}
	.verde {
  		color: green;
	}	
</style>


<!-- Seccion que permite mostrar mensajes en pantalla-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)
<<<<<<< HEAD

		<li>{{ $error}}</li>

		@endforeach
	</ul>

</div>
@endif


Seccion para crear encuestas
<form action="{{url('/encuestas')}}" class="form-horizontal" method="post">
	{{ csrf_field() }}
	<div class="form-group">
=======
		<li>{{ $error}}</li>
		@endforeach
	</ul>
</div>
@endif

<!--Seccion que mediante el llenado de un formulario, permite crear una encuesta.
	Posteriormente, los datos son enviados mediante el método POST a la url "/encuestas"-->
<form action="{{url('/encuestas')}}" class="form-horizontal" method="post">
	{{ csrf_field() }}
	<div class="form-group">
<<<<<<< HEAD
		<label for="asunto" class="control-label">{{'Asunto2'}}</label>
		<input type="text" class="form-control {{$errors->has('asunto')?'is-invalid':''}}" name="asunto" id="asunto" value="">
		{!! $errors->first('asunto','<div class="invalid-feedback">:message</div>') !!}
	</div>
hjhjhj
	<div class="form-group">
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso     '}}</label><br>
		<select name="OS" size="1" style="display: block;
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
			<option selected value="1"> Elige una opción </option>
			<option value="1">Windows Vista</option> 
			<option value="2">Windows 7</option> 
			<option value="3">Windows XP</option>
			<option value="10">Fedora</option> 
			<option value="11">Debian</option> 
			<option value="12">Suse</option> 
		</select>
		<!-- <input type="text" class="form-control {{$errors->has('codigoCurso')?'is-invalid':''}}" name="codigoCurso" id="codigoCurso" value="">
		{!! $errors->first('codigoCurso','<div class="invalid-feedback">:message</div>') !!} -->
	</div>
	
=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
		<label for="asunto" class="control-label">{{'Asunto'}}</label>
		<input type="text" class="form-control {{$errors->has('asunto')?'is-invalid':''}}" name="asunto" id="asunto" value="">
		{!! $errors->first('asunto','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
<<<<<<< HEAD
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label>
		<input type="text" class="form-control {{$errors->has('codigoCurso')?'is-invalid':''}}" name="codigoCurso" id="codigoCurso" value="">
		{!! $errors->first('codigoCurso','<div class="invalid-feedback">:message</div>') !!}
	</div>
=======
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label><br>
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
	</div>
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

	<div class="form-group">
		<label for="rutProfesor" class="control-label">{{'Rut Profesor'}}</label>
		<input type="text" class="form-control {{$errors->has('rutProfesor')?'is-invalid':''}}" name="rutProfesor" id="rutProfesor" value="{{auth()->user()->rut}}" readonly="readonly">
		{!! $errors->first('rutProfesor','<div class="invalid-feedback">:message</div>') !!}
	</div>
	
<<<<<<< HEAD

	<input type="submit" class="btn btn-success" value="Agregar">

	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>
=======
	<input type="submit" class="btn btn-success" value="Agregar ✚">
	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

</form>
</div>

@endsection