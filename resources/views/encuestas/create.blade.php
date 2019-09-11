@extends('layouts.app')

@section('content')

<div class="container">


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)

		<li>{{ $error}}</li>

		@endforeach
	</ul>

</div>
@endif


Seccion para crear encuestas
<form action="{{url('/encuestas')}}" class="form-horizontal" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="asunto" class="control-label">{{'Asunto'}}</label>
		<input type="text" class="form-control {{$errors->has('asunto')?'is-invalid':''}}" name="asunto" id="asunto" value="">
		{!! $errors->first('asunto','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label>
		<input type="text" class="form-control {{$errors->has('codigoCurso')?'is-invalid':''}}" name="codigoCurso" id="codigoCurso" value="">
		{!! $errors->first('codigoCurso','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label for="rutProfesor" class="control-label">{{'Rut Profesor'}}</label>
		<input type="text" class="form-control {{$errors->has('rutProfesor')?'is-invalid':''}}" name="rutProfesor" id="rutProfesor" value="{{auth()->user()->rut}}" readonly="readonly">
		{!! $errors->first('rutProfesor','<div class="invalid-feedback">:message</div>') !!}
	</div>
	

	<input type="submit" class="btn btn-success" value="Agregar">

	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>

</form>
</div>

@endsection