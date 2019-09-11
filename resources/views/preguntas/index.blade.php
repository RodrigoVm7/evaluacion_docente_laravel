@extends('layouts.app')

@section('content')


<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('preguntas/'.$id_encuesta.'/create') }}" class="btn btn-success" >Agregar Pregunta</a>
<a href="{{ url('encuestas') }}" class="btn btn-primary" >Regresar</a>
<br/>
<br/>

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<th>#</th>
			<th>Pregunta</th>
		</tr>
	</thread>

	<tbody>
		@foreach($datos as $pregunta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $pregunta->pregunta}}</td>
			<td>
				<a class="btn btn-warning" href="{{ url('/preguntas/'.$pregunta->id_pregunta.'/edit') }}">Editar</a>

				<form method="post" action="{{ url('/preguntas/'.$pregunta->id_pregunta.'/delete') }}" style="display:inline">
					{{csrf_field() }}
					
					<button class="btn btn-danger" type="sub
					mit" onclick="return confirm('¿Borrar?');" >Borrar</button>
				</form>
			</td>
		</tr>



		@endforeach
	</tbody>
</table>


</div>
@endsection