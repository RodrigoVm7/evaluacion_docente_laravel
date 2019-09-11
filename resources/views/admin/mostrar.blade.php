@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif


<form action="{{ url('/admin/show') }}" class="form-horizontal" method="post"   >
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nombre">{{'Ingrese la ID de la encuesta a revisar'}}</label>
		<input type="text" class="form-control" name="id_encuesta" id="id_encuesta" value="">

		<input type="submit" class="btn btn-success" value="Buscar Encuesta">
	</div>

		<a class="btn btn-primary" href="{{ url('/admin/index') }}">Regresar</a>

</form>

</div>
@endsection