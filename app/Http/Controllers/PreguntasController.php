<?php

namespace App\Http\Controllers;

use App\Preguntas;
use App\Encuestas;
<<<<<<< HEAD
=======
use App\preguntasDesarrollo;
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
use Illuminate\Http\Request;

class PreguntasController extends Controller
{

<<<<<<< HEAD
    public function index(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

=======
    /* Funcion que retorna la vista principal de las preguntas de una enceusta */
    public function index(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        $datos2=preguntasDesarrollo::where('idencuesta',$id_encuesta)->first();
       // return response()->json($datos);
        return view('preguntas.index',compact('datos','id_encuesta','datos2'));
    }

    /* Funcion que retorna a una vista para agregar una pregunta de desarrollo a una encuesta*/
    public function crearDesarrollo(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('preguntas.desarrollo',compact('id_encuesta'));
    }

    /* Función que almacena una pregunta de desarrollo en la base de datos*/
    public function guardarDesarrollo(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $campos=[
            'pregunta' => 'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datos=request()->except('_token');
        preguntasDesarrollo::insert($datos);
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta añadida con éxto');
    }

     /* Funcion que retorna a una vista para agregar preguntas a una encuesta*/
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function create(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('preguntas.create',compact('id_encuesta'));
    }

<<<<<<< HEAD
=======
    /* Funcion que guarda una pregunta junto con sus alternativas en la base de datos*/    
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
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
<<<<<<< HEAD
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

=======
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta añadida con éxto');
    }

    /* Funcion que retorna una vista para editar una pregunta de la encuesta*/
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function edit(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $pregunta= Preguntas::findOrFail($id_pregunta);
        return view('preguntas.edit',compact('pregunta'));
    }

<<<<<<< HEAD
=======
    /* Función que retorna ana vista para editar una pregunta de desarrllo de la encuesta*/
    public function editDesarrollo(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $pregunta= preguntasDesarrollo::findOrFail($id_pregunta);
        return view('preguntas.editDesarrollo',compact('pregunta'));
    }


    /* Función que almacena en la base de datos los datos actualizados de una pregunta*/
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function update(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        Preguntas::where('id_pregunta','=',$id_pregunta)->update($datosEncuesta);
        $id_encuesta=$request->input('idencuesta');
<<<<<<< HEAD
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }

=======
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta actualizada con éxito');
    }

    /* Función que almacena en la base de datos los datos actualizados de una pregunta de desarrollo*/
    public function updateDesarrollo(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        preguntasDesarrollo::where('id','=',$id_pregunta)->update($datosEncuesta);
        $id_encuesta=$request->input('idencuesta');
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta actualizada con éxito');
    }

    /* Función que permite eliminar una pregunta de desarrollo de una encuesta*/
    public function deleteDesarrollo(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);   
        $idenc=preguntasDesarrollo::where('id',$id_pregunta)->get();
        $id_encuesta=$idenc[0]->idencuesta;
        preguntasDesarrollo::destroy($id_pregunta);
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta eliminada con exito');
    }

    /* Funcion que permite eliminar una pregunta de una encuesta */
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function dele(Request $request,$id_pregunta){
        $request->user()->authorizeRoles(['admin','profesor']);   
        $idenc=Preguntas::where('id_pregunta',$id_pregunta)->get();
        $id_encuesta=$idenc[0]->idencuesta;
        Preguntas::destroy($id_pregunta);
<<<<<<< HEAD
        $datos=Preguntas::where('idencuesta',$id_encuesta)->get();
        return view('preguntas.index',compact('datos','id_encuesta'));
    }
=======
        return redirect('preguntas/'.$id_encuesta.'/index')->with('Mensaje','Pregunta eliminada con exito');
    }
<<<<<<< HEAD

    public function prueba(){
        return view('prueba');
    }
=======
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
}