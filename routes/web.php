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
    return view('identificacion/institucion');
});

Route::get('encuesta/nombre','identificacion\institucioncontroller@index')->name('nombre');
Route::get('encuesta/genero','identificacion\nombrecontroller@index')->name('genero');
Route::get('encuesta/identificacion','identificacion\generocontroller@index')->name('identificacion');
Route::get('encuesta/edad','identificacion\identificacioncontroller@index')->name('edad');
Route::get('encuesta/numero','identificacion\numerocontroller@index')->name('num');
Route::get('encuesta/facultad','identificacion\facultadcontroller@index')->name('facultad');
Route::get('encuesta/carrera','identificacion\carreracontroller@index')->name('carrera');
Route::get('encuesta/semestre','identificacion\semestrecontroller@index')->name('semestre');
Route::get('encuesta/año ing','identificacion\añoingcontroller@index')->name('añoing');
Route::get('encuesta/semestre ing','identificacion\semestreingcontroller@index')->name('semestreing');



