<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',array('as' => 'principal','uses'=> 'principalController@getIndex'));
Route::get('/tipos/{id}', 'tiposController@consultar');
Route::get('/pokemon/{id}', 'pokemonController@consultar');
Route::get('/tiposinicio','tiposController@inicio');
Route::get('/tipoPok', 'principalController@mostrar');
Route::get('/principal','principalController@mostrarPrincipal');
Route::get('/pokemonInfo','principalController@mostrarInfo');
Route::get('/pokemon','principalController@mostrarPokemon');
Route::get('/pokemon', 'pokemonController@consulta');

Route::get('/pokemonInfo', 'tiposController@consultarr');
Route::get('/pokeAqui','principalController@mostrarpoke');

//rutas nuevas David
route::get('/pokeAqui/{id}','tiposController@pokeAqui');
route::get('/pdfPokemon/{id}','tiposController@pdfPokemon');
route::get('/poderP/{id}','tiposController@poderP');
