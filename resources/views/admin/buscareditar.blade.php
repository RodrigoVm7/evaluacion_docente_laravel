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
<!-- Seccion que mediante el método POST, recepciona el rut de la persona a editar.
	Posteriormente, una vez recepcionado, se redirige a la url ('admin/editar')-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<form action="{{ url('/admin/editar') }}" class="form-horizontal" method="post"   >
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nombre">{{'Ingrese el Rut de la persona a editar'}}</label>
		<input type="text" class="form-control" name="rut" id="rut" value="">
<<<<<<< HEAD
		<input type="submit" class="btn btn-success" value="Buscar Perfil">
	</div>
		<a class="btn btn-primary" href="{{ url('/admin/index') }}">Regresar</a>
=======
		<input type="submit" class="btn btn-success" value="Buscar Perfil 🔍">
	</div>
		<a class="btn btn-primary" href="{{ url('/admin/index') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

</form>

</div>
@endsection