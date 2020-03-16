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
  return view('notes');
});

Route::get('notas/crear',function (){
  return view('add-note');
});

Route::get('notas/{id}/editar', function ($id) {
  return "Aqui podremos editar la nota :" .$id;
})->where('id','[0-9]+');

Route::get('notas/{id}', function ($id) {
  return "Aqui podremos ver el detalle de la nota :" .$id;
})->where('id','[0-9]+');
