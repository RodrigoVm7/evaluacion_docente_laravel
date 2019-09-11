<?php

namespace App\Http\Controllers;

use App\Preguntas;
use App\Encuestas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{

    public function index(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

    public function create(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('preguntas.create',compact('id_encuesta'));
    }

    public function store(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        $campos=[
            'pregunta' => 'required|string|max:100',
            'alternativa_a' => 'required|string|max:100',
            'alternativa_b' => 'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPregunta=request()->except('_token');
        Preguntas::insert($datosPregunta);
        $id_encuesta=$request->input('idencuesta');
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

    public function edit(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $pregunta= Preguntas::findOrFail($id_pregunta);
        return view('preguntas.edit',compact('pregunta'));
    }

    public function update(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        Preguntas::where('id_pregunta','=',$id_pregunta)->update($datosEncuesta);
        $id_encuesta=$request->input('idencuesta');
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

    public function dele(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);   
        $idenc=Preguntas::where('id_pregunta',$id_pregunta)->get();
        $id_encuesta=$idenc[0]->idencuesta;
        Preguntas::destroy($id_pregunta);
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }
}