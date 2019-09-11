@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('encuestas/create') }}" class="btn btn-success" >Agregar Encuesta</a>
<br/>
<br/>

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<th>#</th>
			<th>Id Encuesta</th>
			<th>Asunto</th>
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
			<td>{{ $encuesta->codigoCurso}}</td>
			<td>

			@if($encuesta->publicada==0)
			<a class="btn btn-warning" href="{{ url('/encuestas/'.$encuesta->id_encuesta.'/edit') }}">Editar
			</a>
			@endif
			<form method="post" action="{{ url('/encuestas/'.$encuesta->id_encuesta) }}" style="display:inline">
			{{csrf_field() }}
			{{ method_field('DELETE') }}
			<button class="btn btn-danger" type="sub
			mit" onclick="return confirm('¿Borrar?');" >Borrar</button>
			</form>
			@if($encuesta->publicada==0)
			<a class="btn btn-success" href="{{url('/preguntas/'.$encuesta->id_encuesta.'/index')}}">Añadir Pregunta
			</a>
			<a class="btn btn-dark" href="{{url('/respuestas/'.$encuesta->id_encuesta.'/publicar')}}">Publicar
			</a>
			@endif
			@if($encuesta->publicada==1 && $encuesta->finalizada==0)
			<a class="btn btn-info" href="{{url('/resultados/'.$encuesta->id_encuesta.'/finalizar')}}">Finalizar
			</a>
			@endif
			@if($encuesta->finalizada==1)
			<a class="btn btn-info" href="{{url('/resultados/'.$encuesta->id_encuesta.'/mostrar')}}">Resultados
			</a>
			@endif

			</td>
		</tr>
		@endforeach
	</tbody>
</table>


</div>
@endsection