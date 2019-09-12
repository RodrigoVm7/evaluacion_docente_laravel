<?php

use Illuminate\Http\Request;

<<<<<<< HEAD

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/preguntas','Api\PreguntaController@all');
Route::get('/encuestas','Api\EncuestaController@all');
Route::get('/encuestas','EncuestaController@showAll'); //Ver Todas
Route::get('/encuesta/{id}','EncuestaController@show'); //Ver solo una
Route::post('/crearEncuesta','EncuestaController@create'); //Crear Encuesta
Route::get('/eliminarEncuesta/{id}','EncuestaController@delete'); //Eliminar Encuesta
Route::post('/actualizarEncuesta','EncuestaController@update');	//Actualiza Encuesta
Route::get('/respuestas','Api\RespuestaController@all');
Route::get('/resultados','Api\ResultadoController@all');
Route::get('/usuarios','Api\UsuarioController@all');
=======
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
=======

Route::resource('preguntasapi','PreguntasApiController');
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
