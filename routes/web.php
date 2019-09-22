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
Route::get('estudiante/identificacion','identificacion\estudiantecontroller@index')->name('estudiante');
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

/*genero*/
Route::get('genero', 'admin\generocontroller@index')->name('ver.genero');
Route::get('genero/crear', 'admin\generocontroller@create')->name('crear.genero');
Route::post('genero', 'admin\generocontroller@store')->name('guardar.genero');
Route::get('genero/{id}/editar', 'admin\generocontroller@edit')->name('editar.genero');
Route::put('genero/{id}', 'admin\generocontroller@update')->name('actualizar.genero');
Route::delete('genero/{id}', 'admin\generocontroller@destroy')->name('eliminar.genero');
/*tipo documento*/
Route::get('tpdoc', 'admin\tpdoccontroller@index')->name('ver.tpdoc');
Route::get('tpdoc/crear', 'admin\tpdoccontroller@create')->name('crear.tpdoc');
Route::post('tpdoc', 'admin\tpdoccontroller@store')->name('guardar.tpdoc');
Route::get('tpdoc/{id}/editar', 'admin\tpdoccontroller@edit')->name('editar.tpdoc');
Route::put('tpdoc/{id}', 'admin\tpdoccontroller@update')->name('actualizar.tpdoc');
Route::delete('tpdoc/{id}', 'admin\tpdoccontroller@destroy')->name('eliminar.tpdoc');
/*institucion*/
Route::get('inst', 'admin\instcontroller@index')->name('ver.inst');
Route::get('inst/crear', 'admin\instcontroller@create')->name('crear.inst');
Route::post('inst', 'admin\instcontroller@store')->name('guardar.inst');
Route::get('inst/{id}/editar', 'admin\instcontroller@edit')->name('editar.inst');
Route::put('inst/{id}', 'admin\instcontroller@update')->name('actualizar.inst');
Route::delete('inst/{id}', 'admin\instcontroller@destroy')->name('eliminar.inst');
