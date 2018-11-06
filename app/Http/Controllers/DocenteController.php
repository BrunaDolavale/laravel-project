<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;

class DocenteController extends Controller
{
  public function index() {
    $docentes = Docente::all();
    $total = Docente::all()->count();
    return view('list-docentes', compact('docentes', 'total'));
  }

  public function create() {
    return view('include-docente');
  }

  public function store(Request $request) {
      $docente = new Docente;
      $docente->nome = $request->nome;
      $docente->nivel = $request->nivel;
      $docente->save();
      return redirect()->route('docente.index')->with('message', 'Docente criado com sucesso!');
  }

  public function show($id) {
      //
  }

  public function edit($id) {
      $docente = Docente::findOrFail($id);
      return view('alter-docente', compact('docente'));
  }

  public function update(Request $request, $id) {
      $docente = Docente::findOrFail($id); 
      $docente->nome = $request->nome;
      $docente->nivel = $request->nivel;
      $docente->save();
      return redirect()->route('docente.index')->with('message', 'Docente alterado com sucesso!');
  }

  public function destroy($id) {
      $docente = Docente::findOrFail($id);
      $docente->delete();
      return redirect()->route('docente.index')->with('message', 'Docente excluído com sucesso!');
  }
}
