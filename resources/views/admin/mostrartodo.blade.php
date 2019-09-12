@extends('layouts.app')

@section('content')

<div class="container">

<<<<<<< HEAD
@if(Session::has('Mensaje'))

=======
<!-- Seccion que permite mostrar mensajes en pantalla-->
@if(Session::has('Mensaje'))
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<<<<<<< HEAD
<a href="{{ url('admin/index') }}" class="btn btn-success" >Regresar</a>

<table class="table table-light table-hover">

=======
<a href="{{ url('admin/index') }}" class="btn btn-success" >Regresar ←</a>

<!-- Seccion que permite que hará que todo lo que se muestre a continuacion, sea dentro de una tabla-->
<table class="table table-light table-hover">

<!-- Cabecera de la tabla, donde se especifica los datos que tendrá cada columna-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
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
<<<<<<< HEAD
=======
<!-- Mediante un ciclo For, se mostrará dentro de la tabla el contenido de cada encuesta-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
		@foreach($datos as $encuesta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $encuesta->id_encuesta}}</td>
			<td>{{ $encuesta->asunto}}</td>
			<td>{{ $encuesta->rutProfesor}}</td>
			<td>{{ $encuesta->codigoCurso}}</td>
			<td>

			
<<<<<<< HEAD
			
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/preguntasadmin')}}">Preguntas
			</a>
			
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/resultadosadmin')}}">Resultados
=======
<!-- Botonces con las opciones que tendrá asociada cada encuesta-->
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/preguntasadmin')}}">Preguntas 📋
			</a>
			
			<a class="btn btn-info" href="{{url('/admin/'.$encuesta->id_encuesta.'/resultadosadmin')}}">Resultados 📈
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
			</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>


</div>
@endsection