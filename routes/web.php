<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
//Amigas y amigos avance con este código para que ustedes lo estudien, igual el jueves lo puedo volver a programar o a explicar por si tienen dudas, como les habia indicado, con esta ruta queremos mostrar el listado de películas que tenemos en nuestra tabla movies
//-------Trabajando sobre Movies -------
Route::get('/proximosEstrenos','MovieController@index');    
//Aquí voy a crear una ruta pero ahora para ver el detalle de la película
Route::get('/detallePelicula/{id}', 'MovieController@show');

Route::get('/incluirPelicula','MovieController@create');
Route::post('/savePelicula','MovieController@save');

//Aquí les realice el método para buscar una película
Route::get('/buscar', 'MovieController@search');

// Esta es la ruta que procesa el formulario de edición. Noten que coloque PATCH.
// Tambien pude colocar PUT, son lo mismo. Noten que viaja por el método get 
Route::get('/pelicula/{id}/update', 'MovieController@edit');
//Fijense que es la misma ruta, pero una viaje por get y la otra viaja por patch
Route::patch('/pelicula/{id}/update', 'MovieController@update');

//Aquí programamos la ruta para eliminar una película
Route::get('/eliminarPelicula/{id}','MovieController@destroy');

//Route::get('/', function () {
//    return view('welcome');
//});
