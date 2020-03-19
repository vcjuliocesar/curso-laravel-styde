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
use App\Note;
use Illuminate\Http\Request;

Route::get('/', 'NoteController@index')->name('notes.index');

Route::get('notas/{id}', 'NoteController@detail')->where('id','[0-9]+')->name('notes.show');

Route::get('notas/crear','NoteController@create')->name('notes.create');

Route::post('notas','NoteController@store')->name('notes.store');

Route::get('notas/{id}/editar', 'NoteController@edit')->where('id','[0-9]+')->name('notes.edit');

Route::put('notas/{note}','NoteController@update')->name('notes.update');
