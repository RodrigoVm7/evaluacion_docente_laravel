<?php

/*
|--------------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------------
|
| Acá encontramos todas las rutas web que se incurrirán dentro de la navegación
| del software.
| Al inicio de cada ruta, anteponemos el prefijo "Route::" seguido del método 
| usado, el cual puede ser GET o POST.
| Posteriormete se indica la ruta, y una función de un controlador al que se le asociará. 
| De este modo, cada vez que se escriba dicha ruta en el navegador, se ejecutará una función,
| donde se indicará que medidas realizar.
|
*/

/*Ruta de inicio, donde se indica la vista principal, y segun el tipo de usuario que inicie sesion,
  se le redirigirá a la vista correspondiente */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/iniciar', function () {
	if(Auth::user() )
		if( Auth::user()->tipo=='admin')
			return redirect('/admin/index');
		else
			if(Auth::user()->tipo=='student'){
				return redirect('/respuestas');
			}else{
				if(Auth::user()->tipo=='profesor'){
					return redirect('/encuestas');
				}else{
					return redirect('/login');
				}
			}
	else
		return redirect('/login');
});


/*Conjunto de todas las rutas utilizadas*/
Route::resource('encuestas','EncuestasController')->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

<<<<<<< HEAD
Route::post('/respuestas', 'RespuestasController@store');
Route::get('/respuestas', 'RespuestasController@index');
Route::get('/respuestas/create', 'RespuestasController@create');
Route::post('/respuestas/show','RespuestasController@show');
Route::get('respuestas/{id}/publicar','RespuestasController@publicar');

Route::get('preguntas/{id}/index','PreguntasController@index');
Route::post('preguntas/{id}/index','PreguntasController@store');
Route::get('preguntas/{id}/create','PreguntasController@create');
Route::post('/preguntas/{id_pregunta}/destroy','PreguntasController@destroy');
Route::post('/preguntas/{id_pregunta}/delete','PreguntasController@dele');
Route::get('/preguntas/{id_pregunta}/edit','PreguntasController@edit');
Route::post('/preguntas/{id_pregunta}','PreguntasController@update');

Route::get('/resultados/{id}/finalizar','ResultadosController@finalizar');
Route::get('/resultados/{id}/mostrar','ResultadosController@mostrar');
Route::post('/resultados/perfil','ResultadosController@perfil');
Route::post('/resultados/editar','ResultadosController@editarPerfil');

Route::get('/admin/index','AdministradorController@index');
Route::get('/admin/ver','AdministradorController@show');
Route::get('/admin/vertodo','AdministradorController@mostrartodo');
Route::post('/admin/show','AdministradorController@mostrar');
Route::get('/admin/{id}/preguntasadmin','AdministradorController@preguntas');
Route::get('/admin/{id}/resultadosadmin','AdministradorController@verresultados');
Route::get('/admin/buscareditar','AdministradorController@buscareditar');
Route::post('/admin/editar','AdministradorController@editar');
Route::post('/admin/perfileditado','AdministradorController@perfileditado');
Route::get('/admin/añadir','AdministradorController@añadir');
Route::post('/admin/insertar','AdministradorController@insertar');

=======
Route::post('/respuestas', 'RespuestasController@store')->middleware('auth');
Route::get('/respuestas', 'RespuestasController@index')->middleware('auth');
Route::get('/respuestas/create', 'RespuestasController@create')->middleware('auth');
Route::post('/respuestas/show','RespuestasController@show')->middleware('auth');
Route::get('respuestas/{id}/publicar','RespuestasController@publicar')->middleware('auth');

Route::get('preguntas/{id}/index','PreguntasController@index')->middleware('auth');
Route::post('preguntas/{id}/index','PreguntasController@store')->middleware('auth');
Route::get('preguntas/{id}/create','PreguntasController@create')->middleware('auth');
Route::post('/preguntas/{id_pregunta}/destroy','PreguntasController@destroy')->middleware('auth');
Route::post('/preguntas/{id_pregunta}/delete','PreguntasController@dele')->middleware('auth');
Route::get('/preguntas/{id_pregunta}/edit','PreguntasController@edit')->middleware('auth');
Route::get('/preguntas/{id_pregunta}/editDesarrollo','PreguntasController@editDesarrollo')->middleware('auth');
Route::post('/preguntas/{id_pregunta}/deleteDesarrollo','PreguntasController@deleteDesarrollo')->middleware('auth');

Route::post('/preguntas/{id_pregunta}','PreguntasController@update')->middleware('auth');
Route::post('/preguntas/{id_pregunta}/upDesarrollo','PreguntasController@updateDesarrollo')->middleware('auth');
Route::get('/preguntas/{id_encuesta}/pregdesarrollo','PreguntasController@crearDesarrollo')->middleware('auth');
Route::post('/preguntas/{id_encuesta}/desarrolloLista','PreguntasController@guardarDesarrollo')->middleware('auth');

Route::get('/resultados/{id}/finalizar','ResultadosController@finalizar')->middleware('auth');
Route::get('/resultados/{id}/mostrar','ResultadosController@mostrar')->middleware('auth');
Route::post('/resultados/perfil','ResultadosController@perfil')->middleware('auth');
Route::post('/resultados/editar','ResultadosController@editarPerfil')->middleware('auth');

Route::get('/admin/index','AdministradorController@index')->middleware('auth');
Route::get('/admin/ver','AdministradorController@show')->middleware('auth');
Route::get('/admin/vertodo','AdministradorController@mostrartodo')->middleware('auth');
Route::post('/admin/show','AdministradorController@mostrar')->middleware('auth');
Route::get('/admin/{id}/preguntasadmin','AdministradorController@preguntas')->middleware('auth');
Route::get('/admin/{id}/resultadosadmin','AdministradorController@verresultados')->middleware('auth');
Route::get('/admin/buscareditar','AdministradorController@buscareditar')->middleware('auth');
Route::post('/admin/editar','AdministradorController@editar')->middleware('auth');
Route::post('/admin/perfileditado','AdministradorController@perfileditado')->middleware('auth');
Route::get('/admin/añadir','AdministradorController@añadir')->middleware('auth');
<<<<<<< HEAD
Route::post('/admin/insertar','AdministradorController@insertar')->middleware('auth');
Route::get('/encuesta/api','EncuestasController@getEncuestas')->middleware('auth');
Route::get('/prueba','PreguntasController@prueba')->middleware('auth');
=======
Route::post('/admin/insertar','AdministradorController@insertar')->middleware('auth');
>>>>>>> 9fe3ef526a30b386156f98d450c0963108d7334b
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
