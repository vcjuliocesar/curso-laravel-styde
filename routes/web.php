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

Route::get('notas', function () {
  return "Aqui estará nuestro listado de notas";
});

Route::get('notas/crear',function (){
  return "Aqui estará nuestro formulario para crear notas";
});
