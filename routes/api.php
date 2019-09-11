<?php

use Illuminate\Http\Request;


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