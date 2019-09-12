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
<br/>
<br/>
<br/>
<a href="{{ url('admin/ver') }}" class="btn btn-success" >Buscar Encuesta</a>
<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Ver Todas las Encuestas</a>
<a href="{{ url('admin/buscareditar') }}" class="btn btn-success" >Editar un Perfil</a>
<a href="{{ url('admin/añadir') }}" class="btn btn-success" >Añadir Usuario</a>
=======

<!--Seccion que mediante 4 botones, ofrecerá distintas funcionalidades al administrador.
	Cada botón, redirige a distintas url, según lo que se desee realizar-->
<br/>
<br/>
<br/>
<a href="{{ url('admin/ver') }}" class="btn btn-success" >Buscar Encuesta 🔍</a>
<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Ver Todas las Encuestas  📖 </a>
<a href="{{ url('admin/buscareditar') }}" class="btn btn-success" >Editar un Perfil ✏</a>
<a href="{{ url('admin/añadir') }}" class="btn btn-success" >Añadir Usuario ✚</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

<br/>
<br/>


</div>
@endsection