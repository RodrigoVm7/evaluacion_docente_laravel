<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    function all() {
        $usuarios= User::all();
        return compact('usuarios');
    }}
