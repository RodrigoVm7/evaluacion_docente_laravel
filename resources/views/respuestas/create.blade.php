@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ url('/respuestas') }}" class="form-horizontal" method="post">
{{ csrf_field() }}
@foreach($encuesta as $dato)
<div class="form-group">
	<label for="id_encuesta" class="control-lavel">{{ 'ID Encuesta: '}}</label>
	<input type="text" class="form-control" name="idencuesta" id="idencuesta" value="{{$dato->id_encuesta}}" readonly="readonly">
</div>

<div class="form-group">
	<label for="Asunto" class="control-lavel">{{ 'Asunto' }}</label>
	<input type="text" class="form-control" name="Asunto" id="Asunto" value="{{$dato->asunto}}"readonly="readonly">
</div>

<div class="form-group">
	<label for="codigoCurso" class="control-lavel">{{ 'Codigo del Curso' }}</label>
	<input type="text" class="form-control" name="codigoCurso" id="codigoCurso" value="{{$dato->codigoCurso}}"readonly="readonly">
</div>




	@foreach($pregunta as $preg)
		<div class="form-group">

            <h5>{{$preg->pregunta}}</h5>
            <label class="radio-inline">
                a) <input  type="radio"  name="{{$preg->id_pregunta}}" id="{{$preg->alternativa_a}}" value="a">{{$preg->alternativa_a}}
                <br>
                b) <input type="radio" name="{{$preg->id_pregunta}}" id="{{$preg->alternativa_b}}" value="b"> {{$preg->alternativa_b}}
                <br> 
		@if(is_null($preg->alternativa_c)==FALSE)
                c) <input type="radio" name="{{$preg->id_pregunta}}" id="{{$preg->alternativa_c}}" value="c"> {{$preg->alternativa_c}}
                <br> 
        @endif
		@if(is_null($preg->alternativa_d)==FALSE)
                d) <input type="radio" name="{{$preg->id_pregunta}}" id="{{$preg->alternativa_d}}" value="d"> {{$preg->alternativa_d}}
            </label>
            <br> 
        @endif
        </div>
	@endforeach




@endforeach

<input type="submit" class="btn btn-success" value="Responder">
<a class="btn btn-primary" href="{{ url('respuestas') }}">Regresar</a>
</form>

</div>
@endsection