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

=======
<!--Seccion que mediante el método POST, recepciona el id de la encuesta a revisar.
	Posteriormente, una vez recepcionado, se redirige a la url ('admin/show')-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<form action="{{ url('/admin/show') }}" class="form-horizontal" method="post"   >
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nombre">{{'Ingrese la ID de la encuesta a revisar'}}</label>
		<input type="text" class="form-control" name="id_encuesta" id="id_encuesta" value="">

<<<<<<< HEAD
		<input type="submit" class="btn btn-success" value="Buscar Encuesta">
	</div>

		<a class="btn btn-primary" href="{{ url('/admin/index') }}">Regresar</a>
=======
		<input type="submit" class="btn btn-success" value="Buscar Encuesta 🔍">
	</div>

		<a class="btn btn-primary" href="{{ url('/admin/index') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

</form>

</div>
@endsection