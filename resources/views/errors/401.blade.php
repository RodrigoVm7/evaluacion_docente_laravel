@extends('layouts.app')

@section('content')

<<<<<<< HEAD
=======

<!--Seccion que permite mostrar un mensaje para el error 401, que sería provocado por
	intentar acceder a una accion donde no se tiene los permisos-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<div>
	<br><br><br><br>
	<h1 style= "text-align: center">No estas autorizado para realizar esta accion </h1><br>
	<center>
		<a class="btn btn-primary" href="{{ url('iniciar') }}" style="text-align:center;">Regresar</a>
	</center>
</div>
@endsection