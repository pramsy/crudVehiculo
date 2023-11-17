<?php
use App\Http\Middleware\AutentificacaoMiddleware;

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

Route::prefix('/')->group(function(){
    Route::get('','IndexController@getIndex');
    Route::get('inicio','IndexController@getIndex')->name('site.inicio');
    Route::get('sobre', 'SobreNosController@getIndex')->name('site.sobre');
    Route::get('contato', 'ContatoController@getIndex')->name('site.contato');
    Route::get('email', 'ContatoController@getEmail')->name('site.email');
    Route::post('contato', 'ContatoController@enviarMensagem')->name('site.contato');
    Route::get('login/{error?}', 'LoginController@getLogin')->name('site.login');
    Route::post('login', 'LoginController@postLogin')->name('site.login');
});
Route::prefix('/admin')->middleware(AutentificacaoMiddleware::class)->group(function(){    
    Route::get('/', 'InicioController@index')->name('admin.inicio');
    Route::get('/inicio', 'InicioController@index')->name('admin.inicio');
    Route::get('/sair', 'LoginController@sair')->name('admin.sair');

    

    Route::prefix('/carro')->group(function(){
        Route::get('/', 'CarroController@index')->name('admin.carro');
        Route::get('/cadastrar', 'CarroController@getCadastro')->name('admin.carro.cadastrar');
        Route::post('/cadastrar', 'CarroController@postCadastro')->name('admin.carro.cadastrar');
        Route::get('/listar', 'CarroController@getListar')->name('admin.carro.listar');
        Route::get('/search', 'CarroController@Pesquisar')->name('admin.carro.search');
        Route::get('/editar/{id}', 'CarroController@Edit')->name('admin.carro.editar');
        Route::get('/delete/{id}', 'CarroController@Delete')->name('admin.carro.delete');
    });
    
    Route::get('/user/listar','AdministradorController@getListar')->name('user.listar');
    Route::get('/user/search','AdministradorController@Pesquisar')->name('user.search');
    Route::resource('user','AdministradorController');
});
