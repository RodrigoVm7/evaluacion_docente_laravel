<?php

namespace App\Http\Controllers\Api;
use App\Resultados;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultadoController extends Controller
{
    function all() {
        $resultados= Resultados::all();
        return compact('resultados');
    }
}
