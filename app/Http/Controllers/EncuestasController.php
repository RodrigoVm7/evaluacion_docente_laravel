<?php

namespace App\Http\Controllers;

use App\encuestas;
use App\Respuestas;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    /* Funcion que retorna la vista principal de un profesor, donde se le muestran desplegadas todas las 
    encuestas que haya realizado */
    public function index(Request $request){
         $request->user()->authorizeRoles(['profesor']);
         $datos=encuestas::where('rutProfesor',$request->user()->rut)->get();
         return view('encuestas.index',compact('datos'));
    }

    /* Funcion que retorna a la vista para crear una encuesta*/
    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datos=
        return view('encuestas.create');
    }

    /* Funcion que almacena una encuesta en la base de datos*/
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

    /* Funcion que retorna una vista para editar campos de una encuesta */
    public function edit(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $encuesta= Encuestas::findOrFail($id_encuesta);
        return view('encuestas.edit',compact('encuesta'));
    }

    /* Funcion que guarda los datos actualizados de una encuesta */
    public function update(Request $request, $id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        Encuestas::where('id_encuesta','=',$id_encuesta)->update($datosEncuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta modificada con éxito');
    }

    /* Funcion que permite eliminar una encuesta*/
    public function destroy(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        Encuestas::destroy($id_encuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta eliminada con éxito');
    }

    public function getEncuestas(){
        $encuestas=encuestas::all();
        return response()->json($encuestas);
    }
}
