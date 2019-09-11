<?php

namespace App\Http\Controllers\Api;

use App\Preguntas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreguntaController extends Controller
{
    function all() {
        $pregunta= Preguntas::all();
        return compact('pregunta');
    }
}
