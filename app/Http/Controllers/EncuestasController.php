<?php

namespace App\Http\Controllers;

use App\encuestas;
use App\Respuestas;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use App\cursos_usuarios;
use App\Carreras;
use App\Cursos;
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
<<<<<<< HEAD
    
    public function index(Request $request){
         $request->user()->authorizeRoles(['profesor']);
         $datos=encuestas::where('rutProfesor',$request->user()->rut)->get();
         return view('encuestas.index',compact('datos'));
    }

    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('encuestas.create');
    }

=======
<<<<<<< HEAD
    /* Funcion que retorna la vista principal de un profesor, donde se le muestran desplegadas todas las 
=======
    /* Función que retorna la vista principal de un profesor, donde se le muestran desplegadas todas las 
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
    encuestas que haya realizado */
    public function index(Request $request){
         $request->user()->authorizeRoles(['profesor']);
         $datos=encuestas::where('rutProfesor',$request->user()->rut)->get();
<<<<<<< HEAD
         return view('encuestas.index',compact('datos'));
    }

    /* Funcion que retorna a la vista para crear una encuesta*/
    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=
        return view('encuestas.create');
    }

    /* Funcion que almacena una encuesta en la base de datos*/
=======
         //$datos_cursos=Cursos::where('codigo_curso',$datos->codigoCurso)->get();
         //$carreras=Carreras::where('id_carrera',$datos_cursos->id_carrera)->get();
         return view('encuestas.index',compact('datos'));
         //return response()->json($datos[0]->codigoCurso);
    }

    /* Función que retorna a la vista para crear una encuesta*/
    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=cursos_usuarios::where('rut',$request->user()->rut)->get();
        return view('encuestas.create',compact('datos'));
        
    }

    /* Función que almacena una encuesta en la base de datos*/
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function store(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        $campos=[
            'codigoCurso' => 'required|string|max:100',
            'rutProfesor' => 'required|string|max:100',
            'asunto' => 'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosEncuesta=request()->except('_token');

        Encuestas::insert($datosEncuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta agregada con éxito');
    }

<<<<<<< HEAD
    public function show(Request $request,encuestas $encuestas){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('encuestas.result');
    }

    public function edit(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $encuesta= Encuestas::findOrFail($id_encuesta);
        return view('encuestas.edit',compact('encuesta'));
    }

=======
<<<<<<< HEAD
    /* Funcion que retorna una vista para editar campos de una encuesta */
    public function edit(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $encuesta= Encuestas::findOrFail($id_encuesta);
        return view('encuestas.edit',compact('encuesta'));
    }

    /* Funcion que guarda los datos actualizados de una encuesta */
=======
    /* Función que retorna una vista para editar campos de una encuesta */
    public function edit(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $encuesta= Encuestas::findOrFail($id_encuesta);
        $datos=cursos_usuarios::where('rut',$request->user()->rut)->get();
        return view('encuestas.edit',compact('encuesta','datos'));
    }

    /* Función que guarda los datos actualizados de una encuesta */
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function update(Request $request, $id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        Encuestas::where('id_encuesta','=',$id_encuesta)->update($datosEncuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta modificada con éxito');
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /* Funcion que permite eliminar una encuesta*/
=======
    /* Función que permite eliminar una encuesta*/
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
    public function destroy(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        Encuestas::destroy($id_encuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta eliminada con éxito');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD

    public function getEncuestas(){
        $encuestas=encuestas::all();
        return response()->json($encuestas);
    }
=======
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
}
