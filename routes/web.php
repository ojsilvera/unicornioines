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



/*Administrador*/
Route::get('admin/Login','administracion\Logincontroller@index')->name('Login');
Route::get('admin/index','administracion\indexcontroller@index')->name('inicio');

/*Usuario*/
Route::get('usuario/ver','administracion\verUsuariocontroller@index')->name('ver.usu');
Route::get('usuario/crear','administracion\crearUsuariocontroller@index')->name('crear.usu');
Route::get('usuario/actualizar','administracion\actualizarUsuariocontroller@index')->name('act.usu');
Route::get('usuario/eliminar','administracion\eliminarUsuariocontroller@index')->name('eli.usu');

/*Encuesta*/

/*Reporte*/



