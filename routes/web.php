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

// Route::get('/', function () {
//     return view('welcome');   
    
// });

Route::get('/','IndexController@getIndex');
Route::get('/inicio','IndexController@getIndex');
Route::get('/sobre', 'SobreNosController@getIndex');
Route::get('/contato', 'ContatoController@getIndex');
Route::get('/email', 'ContatoController@getEmail');
Route::post('/contato', 'ContatoController@enviarMensagem')->name('contato');
Route::get('/usuario', 'UsuarioController@getCadastro')->name('usuario');
Route::post('/usuario', 'UsuarioController@postCadastro')->name('usuario');
Route::get('/carro', 'CarroController@getCadastro')->name('carro');
Route::post('/carro', 'CarroController@postCadastro')->name('carro');
