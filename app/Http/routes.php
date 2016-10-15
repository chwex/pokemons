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
Route::get('/tiposInicio', 'tiposController@inicio');
Route::get('/tipos/{id}', 'tiposController@consultar');
Route::get('/pokemon/{id}', 'pokemonController@consultar');


