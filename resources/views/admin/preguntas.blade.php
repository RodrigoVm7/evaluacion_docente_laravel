@extends('layouts.app')

@section('content')


<div class="container">


<a href="{{ url('admin/vertodo') }}" class="btn btn-success" >Regresar</a>
<br/>
<br/>

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<th>#</th>
			<th>Pregunta</th>
		</tr>
	</thread>

	<tbody>
		@foreach($datos as $pregunta)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $pregunta->pregunta}}<br/>
				a) {{$pregunta->alternativa_a}}<br/>
				b) {{$pregunta->alternativa_b}}<br/>
				@if(is_null($pregunta->alternativa_c)==FALSE)
				c) {{$pregunta->alternativa_c}}<br/>
				@endif
				@if(is_null($pregunta->alternativa_d)==FALSE)
				d) {{$pregunta->alternativa_d}}
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


</div>
@endsection