@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<br/>
<br/>
<br/>
<a href="{{ url('admin/ver') }}" class="btn btn-success" >Buscar Encuesta</a>
<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Ver Todas las Encuestas</a>
<a href="{{ url('admin/buscareditar') }}" class="btn btn-success" >Editar un Perfil</a>
<a href="{{ url('admin/añadir') }}" class="btn btn-success" >Añadir Usuario</a>

<br/>
<br/>


</div>
@endsection