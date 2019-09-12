<?php

namespace App\Http\Controllers;

use App\Encuestas;
use App\Respuestas;
use App\Preguntas;
<<<<<<< HEAD
=======
use App\preguntasDesarrollo;
use App\respuestasDesarrollo;
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
<<<<<<< HEAD
=======
    /* Funcion que retorna la vista principal de un estudiante */
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function index(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
        return view('respuestas.index');
    }

<<<<<<< HEAD
=======
    /* Funcion que permite responder una encuesta*/
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
        return view('respuestas.create');
    }

<<<<<<< HEAD
    public function store(Request $request){
        $request->user()->authorizeRoles(['admin','student']);        
        $datosRespuesta=request()->except('_token','idencuesta','Asunto','codigoCurso');
        $idencuesta=$request->input('idencuesta');
        $rut=$request->user()->rut;
        $dato=Preguntas::where('idencuesta','=',$idencuesta)->get();
        $i=0;

        foreach ($datosRespuesta as $respuestaaa){
=======
    /* Funcion que permite almacenar en la base de datos las respuestas a la encuesta*/
    public function store(Request $request){
        $request->user()->authorizeRoles(['admin','student']);        
        //$datosRespuesta=request()->except('_token','idencuesta','Asunto','codigoCurso');
        $idencuesta=$request->input('idencuesta');
        $rut=$request->user()->rut;
        $dato=Preguntas::where('idencuesta','=',$idencuesta)->get();
        $existeDesarrollo=preguntasDesarrollo::where('idencuesta','=',$idencuesta)->first();

        /* En caso de existir pregunta de desarrollo., se almacena esta respuesta en su tabla correspondiente */
        if($existeDesarrollo!=""){
            $resp_desarrollo= new respuestasDesarrollo();
            $resp_desarrollo->idencuesta=$idencuesta;
            $resp_desarrollo->rutEstudiante=$rut;
            $id=preguntasDesarrollo::where('idencuesta','=',$idencuesta)->first();
            $resp_desarrollo->id_pregunta=$id->id;
            $resp_desarrollo->respuesta=$request->input('pregunta');
            $resp_desarrollo->save();
            $datosRespuesta=request()->except('_token','idencuesta','Asunto','codigoCurso','pregunta');
        }else{
            $datosRespuesta=request()->except('_token','idencuesta','Asunto','codigoCurso');
        }
        $i=0;
        /*Se almacenan todas las respuesta a las alternativas en su tabla correspondiente*/
        foreach($datosRespuesta as $respuestaaa){
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
            $respuesta= new respuestas();
            $respuesta->idencuesta=$idencuesta;
            $respuesta->rutEstudiante=$rut;
            $respuesta->id_pregunta=$dato[$i]->id_pregunta;
            $respuesta->respuesta=$respuestaaa;
            $respuesta->save();
            $i++;
        }
        return redirect('respuestas')->with('Mensaje','La Encuesta se ha respondido con éxito');
    }

<<<<<<< HEAD
     public function show(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
=======
    /* Funcion que permite buscar una encuesta a responder, siempre y cuando esta ya este publicada */
    public function show(Request $request){
        $request->user()->authorizeRoles(['admin','student']);

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
        $id_encuesta=request()->except('_token');
        $encuesta=Encuestas::where('id_encuesta','=',$id_encuesta)->get();
        if($encuesta!="[]" && $encuesta[0]->publicada=='1'){    //Si Existe la encuesta y esta publicada
            $pregunta=Preguntas::where('idencuesta','=',$id_encuesta)->get();
<<<<<<< HEAD
            $yaExiste=Respuestas::where('idencuesta','=',$id_encuesta)->where('rutEstudiante','=',$request->user()->rut)->get();
            if($yaExiste=='[]'){
                return view('respuestas.create',compact('encuesta','pregunta'));
=======
            $desarrollo=preguntasDesarrollo::where('idencuesta','=',$id_encuesta)->first();
            $yaExiste=Respuestas::where('idencuesta','=',$id_encuesta)->where('rutEstudiante','=',$request->user()->rut)->get();
            if($yaExiste=='[]'){
                return view('respuestas.create',compact('encuesta','pregunta','desarrollo'));
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
            }else{
                return redirect('respuestas')->with('Mensaje','La encuesta ya se ha contestado');
            }
        }else{
            return redirect('respuestas')->with('Mensaje','La Encuesta no existe');
        }
    }
    
<<<<<<< HEAD

=======
    /* Funcion que permite publicar una encuesta, de manera que sea visible para poder ser respondida */
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function publicar(Request $request,$id){
        $request->user()->authorizeRoles(['admin','profesor']);
        Encuestas::where('id_encuesta','=',$id)->update(['publicada'=> 1]);
        return redirect('encuestas')->with('Mensaje','Encuesta publicada con éxito');
    }
}
