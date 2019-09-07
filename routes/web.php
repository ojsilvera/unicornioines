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

Route::get('inicio/Layot','administracion\Layoutcontroller@index')->name('layout');
Route::get('/identificacion','identificacion\datosgeneralescontroller@index')->name('datos_generales');
Route::get('docente/identificacion','identificacion\docentecontroller@index')->name('docente');
Route::get('administrativo/identificacion','identificacion\administrativocontroller@index')->name('administrativo');

/*Administrador*/
Route::get('admin/Login','administracion\Logincontroller@index')->name('Login');
Route::get('admin/index','administracion\indexcontroller@index')->name('inicio');

/*Usuario*/
Route::get('usuario/ver','administracion\verUsuariocontroller@index')->name('ver.usu');
Route::get('usuario/crear','administracion\crearUsuariocontroller@index')->name('crear.usu');
Route::get('usuario/actualizar','administracion\actualizarUsuariocontroller@index')->name('act.usu');
Route::get('usuario/eliminar','administracion\eliminarUsuariocontroller@index')->name('eli.usu');

/*Encuesta*/
Route::get('Encuesta/ver','administracion\verEncuestacontroller@index')->name('ver.enc');
Route::get('Encuesta/crear','administracion\crearEncuestacontroller@index')->name('crear.enc');
Route::get('Encuesta/actualizar','administracion\actualizarEncuestacontroller@index')->name('act.enc');
Route::get('Encuesta/eliminar','administracion\eliminarEncuestacontroller@index')->name('eli.enc');

/*Reporte*/
Route::get('Reporte/ver','administracion\verReportecontroller@index')->name('ver.rep');
Route::get('Reporte/generar','administracion\generarReportecontroller@index')->name('crear.rep');
Route::get('Reporte/eliminar','administracion\eliminarReportecontroller@index')->name('eli.rep');


