<?php

namespace App\Http\Controllers\Api;
use App\encuestas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EncuestaController extends Controller
{
     function all() {
        return encuestas::all();
     }
       // Función para ver solo una encuesta
    public function show($id){
        return Encuesta::where('id_encuesta','=',$id)->first();
    }

    // Función que permite crear una nueva encuesta
    public function create(Request $request){
        $datosEncuesta=request()->except('_token');
        Encuesta::insert($datosEncuesta);
    }

    // Función que permite eliminar una encuesta
    public function delete($id){
    	Encuesta::destroy($id);
    }

    // Función que permite actualizar una encuesta
    public function update(Request $request){
        $id=request()->input('id_encuesta');
        $datosEncuesta=request()->except('_token','id_encuesta');
        Encuesta::where('id_encuesta','=',$id)->update($datosEncuesta);
    }


}
