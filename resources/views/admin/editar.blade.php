@extends('layouts.app')

@section('content')

<div class="container">

<<<<<<< HEAD

=======
<!--Seccion que mediante el método POST, recepciona los datos de un perfil a editar, para luego
	mandarlos a la url 'admin/perfileditado'-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<form action="{{ url('/admin/perfileditado') }}" class="form-horizontal" method="post">
{{ csrf_field() }}

	<div class="form-group">
		<label for="rut" class="control-label">{{'Rut'}}</label>
		<input type="text" class="form-control" name="rut" id="rut" value="{{ $perfil->rut}}" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="name" class="control-label">{{'Nombre'}}</label>
		<input type="text" class="form-control" name="name" id="name" value="{{$perfil->name}}">
	</div>

	<div class="form-group">
		<label for="email" class="control-label">{{'Email'}}</label>
		<input type="text" class="form-control" name="email" id="email" value="{{ $perfil->email}}">
	</div>

<<<<<<< HEAD
	<input type="submit" class="btn btn-success" value="Modificar">
	<a class="btn btn-primary" href="{{ url('admin/index') }}">Regresar</a>
=======
	<input type="submit" class="btn btn-success" value="Modificar ✍">
	<a class="btn btn-primary" href="{{ url('admin/index') }}">Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

</form>
</div>

@endsection