<?php

namespace App\Http\Controllers\Api;
use App\Respuestas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RespuestaController extends Controller
{
   	function all() {
        $respuestas= Respuestas::all();
        return compact('respuestas');
    }
}
