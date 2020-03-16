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
  $notes = [
    "Primera nota",
    "Segunda nota",
    "Tercera nota",
    "Cuarta nota",
  ];
  return view('notes',['notes' => $notes]);
})->name('notes.index');

Route::get('notas/{id}', function ($id) {
  return "Aqui podremos ver el detalle de la nota :" .$id;
})->where('id','[0-9]+')->name('notes.show');

Route::get('notas/crear',function (){
  return view('add-note');
})->name('notes.create');

Route::get('notas/{id}/editar', function ($id) {
  return "Aqui podremos editar la nota :" .$id;
})->where('id','[0-9]+')->name('notes.edit');
