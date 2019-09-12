@extends('layouts.app')

@section('content')

<div class="container">

<<<<<<< HEAD
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('encuestas/create') }}" class="btn btn-success" >Agregar Encuesta</a>
<br/>
<br/>

<table class="table table-light table-hover">

=======
<!-- Seccion que permite mostrar mensajes en pantalla-->
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>
@endif

<!-- Boton que se ubicará en la parte superior de la pantalla, y redigirá a una url para agregar encuestas-->
<a href="{{ url('encuestas/create') }}" class="btn btn-success" >Agregar Encuesta ✚</a>
<br/>
<br/>

<!-- Seccion que permite que hará que todo lo que se muestre a continuacion, sea dentro de una tabla-->
<table class="table table-light table-hover">

	<!-- Cabecera de la tabla, donde se especifica los datos que tendrá cada columna-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
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
<<<<<<< HEAD
=======
		<!-- Mediante un ciclo For, se mostrará dentro de la tabla el contenido de cada encuesta-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
		@foreach($datos as $encuesta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $encuesta->id_encuesta}}</td>
			<td>{{ $encuesta->asunto}}</td>
			<td>{{ $encuesta->codigoCurso}}</td>
			<td>

<<<<<<< HEAD
			@if($encuesta->publicada==0)
			<a class="btn btn-warning" href="{{ url('/encuestas/'.$encuesta->id_encuesta.'/edit') }}">Editar
=======
			<!-- Botonces con las opciones que tendrá asociada cada encuesta, según el estado en que se
				encuentre esta-->

			@if($encuesta->publicada==0)
			<a class="btn btn-warning" href="{{ url('/encuestas/'.$encuesta->id_encuesta.'/edit') }}">Editar✎
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
			</a>
			@endif
			<form method="post" action="{{ url('/encuestas/'.$encuesta->id_encuesta) }}" style="display:inline">
			{{csrf_field() }}
			{{ method_field('DELETE') }}
			<button class="btn btn-danger" type="sub
<<<<<<< HEAD
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
=======
			mit" onclick="return confirm('¿Borrar?');" >Borrar ✖</button>
			</form>
			@if($encuesta->publicada==0)
			<a class="btn btn-success" href="{{url('/preguntas/'.$encuesta->id_encuesta.'/index') }}">Añadir Pregunta ✚
			</a>
			<a class="btn btn-dark" href="{{url('/respuestas/'.$encuesta->id_encuesta.'/publicar')}}">Publicar 📥 
			</a>
			@endif
			@if($encuesta->publicada==1 && $encuesta->finalizada==0)
			<a class="btn btn-info" href="{{url('/resultados/'.$encuesta->id_encuesta.'/finalizar')}}">Finalizar 🚪
			</a>
			@endif
			@if($encuesta->finalizada==1)
			<a class="btn btn-info" href="{{url('/resultados/'.$encuesta->id_encuesta.'/mostrar')}}">Resultado📈
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
			</a>
			@endif

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<<<<<<< HEAD

=======
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
</div>
@endsection