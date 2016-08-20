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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/olamundo', ['uses' => 'olaMundo@getOlaMundo']);
Route::get('/contatos', ['uses' => 'ContatosController@getIndex']);
Route::get('/conteudo', ['uses' => 'ConteudoController@getIndex']);
Route::get('/conteudo/teste', ['uses' => 'ConteudoController@Teste']);