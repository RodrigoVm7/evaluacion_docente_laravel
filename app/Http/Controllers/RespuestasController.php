<?php

namespace App\Http\Controllers;

use App\Encuestas;
use App\Respuestas;
use App\Preguntas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    public function index(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
        return view('respuestas.index');
    }

    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
        return view('respuestas.create');
    }

    public function store(Request $request){
        $request->user()->authorizeRoles(['admin','student']);        
        $datosRespuesta=request()->except('_token','idencuesta','Asunto','codigoCurso');
        $idencuesta=$request->input('idencuesta');
        $rut=$request->user()->rut;
        $dato=Preguntas::where('idencuesta','=',$idencuesta)->get();
        $i=0;

        foreach ($datosRespuesta as $respuestaaa){
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

     public function show(Request $request){
        $request->user()->authorizeRoles(['admin','student']);
        $id_encuesta=request()->except('_token');
        $encuesta=Encuestas::where('id_encuesta','=',$id_encuesta)->get();
        if($encuesta!="[]" && $encuesta[0]->publicada=='1'){    //Si Existe la encuesta y esta publicada
            $pregunta=Preguntas::where('idencuesta','=',$id_encuesta)->get();
            $yaExiste=Respuestas::where('idencuesta','=',$id_encuesta)->where('rutEstudiante','=',$request->user()->rut)->get();
            if($yaExiste=='[]'){
                return view('respuestas.create',compact('encuesta','pregunta'));
            }else{
                return redirect('respuestas')->with('Mensaje','La encuesta ya se ha contestado');
            }
        }else{
            return redirect('respuestas')->with('Mensaje','La Encuesta no existe');
        }
    }
    

    public function publicar(Request $request,$id){
        $request->user()->authorizeRoles(['admin','profesor']);
        Encuestas::where('id_encuesta','=',$id)->update(['publicada'=> 1]);
        return redirect('encuestas')->with('Mensaje','Encuesta publicada con éxito');
    }
}
