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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario','UsuarioController@index')->name('usuario');
Route::get('/rol','UsuarioController@roles')->name('roles');
Route::get('/permisos','UsuarioController@permisos')->name('permisos');
Route::get('usuario/rol/{id}','UsuarioController@asignarRol');