@extends('layouts.app')

@section('content')


<div class="container">

<<<<<<< HEAD

<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Regresar</a>
=======
<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Regresar ←</a>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
<br/>
<br/>

<table class="table table-light table-hover">

<<<<<<< HEAD
=======
<!-- Cabecera de la tabla, donde se especifica los datos que tendrá cada columna-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
	<thread class="thread-light">
		<tr>
			<th>#</th>
			<th>Pregunta</th>
		</tr>
	</thread>

	<tbody>
<<<<<<< HEAD
		@foreach($datos as $pregunta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $pregunta->pregunta}}<br/>
				a) {{$pregunta->alternativa_a}}<br/>
				b) {{$pregunta->alternativa_b}}<br/>
				@if(is_null($pregunta->alternativa_c)==FALSE)
				c) {{$pregunta->alternativa_c}}<br/>
				@endif
=======
<!-- Mediante un ciclo For, se mostrará dentro de la tabla el contenido de cada pregunta-->

		<!--Se define una variable "numit" que corresponde a un contador, el que se imprime junto a cada pregunta-->
		@php
            $numit=0
        @endphp

		@foreach($datos as $pregunta)
		<tr>
			<!--Se incrementa el contador-->
			@php
                $numit=$loop->iteration	
            @endphp
			<td>{{$numit}}</td>

			<td>{{ $pregunta->pregunta}}<br/>
				a) {{$pregunta->alternativa_a}}<br/>
				b) {{$pregunta->alternativa_b}}<br/>
				<!--En caso de existir alternativa C, se muestra-->
				@if(is_null($pregunta->alternativa_c)==FALSE)
				c) {{$pregunta->alternativa_c}}<br/>
				@endif
				<!--En caso de existir alternativa D, se muestra-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
				@if(is_null($pregunta->alternativa_d)==FALSE)
				d) {{$pregunta->alternativa_d}}
				@endif
			</td>
		</tr>
		@endforeach
<<<<<<< HEAD
=======
		<!--En caso de existir pregunta de desarrollo, esta se muestra por pantalla-->
		@if(is_null($datos2)==FALSE)
			<tr>
			<td>{{$numit+1}}</td>
			<td>{{$datos2->pregunta}}</td>
		</tr>
		@endif

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
	</tbody>
</table>


</div>
@endsection