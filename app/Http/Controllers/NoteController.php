<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Note;

class NoteController extends Controller
{
  public function index () {
    $notes = Note::all();
    return view('notes',['notes' => $notes]);
  }

  public function detail ($id) {
    return "Aqui podremos ver el detalle de la nota :" .$id;
  }

  public function create(){
    return view('add-note');
  }

  public function store (Request $request) {
    $request->validate([
        'title'=>['required',Rule::unique('notes')],
        'content'=>'required',
    ]);

    Note::create([
      'title' => $request->input('title'),
      'content' => $request->input('content'),
    ]);
    return redirect('/');
  }

  public function edit($id) {
    $note = Note::find($id);
      return view("edit-note",["note" => $note]);
  }
}
