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
    return view('theme\layout');
});

Route::get('layout/Login','administracion\Layoutcontroller@index')->name('Login');
Route::get('login/index','administracion\Logincontroller@index')->name('inicio');
Route::get('administracion/index','administracion\indexcontroller@index')->name('aindex');
Route::get('usuario/ver','administracion\verUsuariocontroller@index')->name('ver.usu');
Route::get('usuario/crear','administracion\crearUsuariocontroller@index')->name('crear.usu');


