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

