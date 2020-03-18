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

Route::get('/', function () {
  $notes = Note::all();
  return view('notes',['notes' => $notes]);
})->name('notes.index');

Route::get('notas/{id}', function ($id) {
  return "Aqui podremos ver el detalle de la nota :" .$id;
})->where('id','[0-9]+')->name('notes.show');

Route::get('notas/crear',function (){
  return view('add-note');
})->name('notes.create');

Route::post('notas',function(Request $request) {
  Note::create([
    'title' => $request->input('title'),
    'content' => $request->input('content'),
  ]);
  return redirect('/');
})->name('notes.store');

Route::get('notas/{id}/editar', function ($id) {
  $note = Note::find($id);
    return view("edit-note",["note" => $note]);
})->where('id','[0-9]+')->name('notes.edit');
