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
    return view('administracion.Login');
});

Route::get('login/index','administracion\Logincontroller@index')->name('inicio');
Route::get('administracion/index','administracion\indexcontroller@index')->name('aindex');


