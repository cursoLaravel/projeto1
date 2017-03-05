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

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => 'cors'], function(Router $router){
//     $router->get('usuario', 'UsuarioController@getAll');
// 	$router->get('usuario/{id}', 'UsuarioController@get');
// 	$router->post('usuario', 'UsuarioController@salvar');
// 	$router->put('usuario/{id}', 'UsuarioController@atualizar');

// });



Route::get('usuario', 'UsuarioController@getAll');

Route::get('usuario/{id}', 'UsuarioController@get');

Route::post('usuario', 'UsuarioController@salvar');

Route::put('usuario/{id}', 'UsuarioController@atualizar');