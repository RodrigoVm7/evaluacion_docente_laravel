<?php

namespace App\Http\Controllers;

use App\encuestas;
use App\Respuestas;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    
    public function index(Request $request){
         $request->user()->authorizeRoles(['profesor']);
         $datos=encuestas::where('rutProfesor',$request->user()->rut)->get();
         return view('encuestas.index',compact('datos'));
    }

    public function create(Request $request){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('encuestas.create');
    }

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

    public function show(Request $request,encuestas $encuestas){
        $request->user()->authorizeRoles(['admin','profesor']);
        return view('encuestas.result');
    }

    public function edit(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $encuesta= Encuestas::findOrFail($id_encuesta);
        return view('encuestas.edit',compact('encuesta'));
    }

    public function update(Request $request, $id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        $datosEncuesta=request()->except(['_token','_method']);
        Encuestas::where('id_encuesta','=',$id_encuesta)->update($datosEncuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta modificada con éxito');
    }

    public function destroy(Request $request,$id_encuesta){
        $request->user()->authorizeRoles(['admin','profesor']);
        Encuestas::destroy($id_encuesta);
        return redirect('encuestas')->with('Mensaje','Encuesta eliminada con éxito');
    }
}
