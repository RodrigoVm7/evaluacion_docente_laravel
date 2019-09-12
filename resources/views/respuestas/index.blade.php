@extends('layouts.app')

@section('content')

<div class="container">
<<<<<<< HEAD

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif
=======
hhgsaa
<!-- Sección que permite mostrar mensajes en pantalla-->
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>
@endif

<!--Sección que mediante el llenado de un formulario, permite ingresar el Id de la encuesta a responder.
	Posteriormente, los datos son enviados mediante el método POST a la url "/respuestas/show"-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<form action="{{ url('/respuestas/show') }}" class="form-horizontal" method="post"   >
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nombre">{{'Ingrese la ID de la encuesta a responder'}}</label>
		<input type="text" class="form-control" name="id_encuesta" id="id_encuesta" value="">

<<<<<<< HEAD
		<input type="submit" class="btn btn-success" value="Responder Encuesta">
=======
		<input type="submit" class="btn btn-success" value="Responder Encuesta ✏">

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
	</div>
</form>

</div>
@endsection