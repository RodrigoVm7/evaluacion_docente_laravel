@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('admin/index') }}" class="btn btn-success" >Regresar</a>

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<th>#</th>
			<th>Id Encuesta</th>
			<th>Asunto</th>
			<th>Rut Profesor</th>
			<th>Codigo Curso</th>
			<th>Acciones</th>
		</tr>
	</thread>

	<tbody>
		@foreach($datos as $encuesta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $encuesta->id_encuesta}}</td>
			<td>{{ $encuesta->asunto}}</td>
			<td>{{ $encuesta->rutProfesor}}</td>
			<td>{{ $encuesta->codigoCurso}}</td>
			<td>

			
			
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/preguntasadmin')}}">Preguntas
			</a>
			
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/resultadosadmin')}}">Resultados
			</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>


</div>
@endsection