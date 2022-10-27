<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tarefas;

class tarefasController extends Controller
{
    public function index() {
        $tarefas = tarefas::get();
        return view('welcome', compact('tarefas'));
    }

    public function addBD(Request $request) {
        $tarefa = new tarefas;

        $tarefa->nome = $request->nome;
        $tarefa->data_tarefa = $request->data_tarefa;
        $tarefa->descricao = $request->descricao;

        $tarefa->save();

        return redirect('/');
    }

    public function addTask() {
        return view('addtarefa');
    }

    public function deleteTask() {
        return view('deltarefa');
    }

    public function edit($id) {
        $edit = tarefas::find($id);
        return view('edit', compact('edit'));
    }

    public function update(Request $request, $id) {
        $update = tarefas::find($id);

        $update->update($request->all());

        return redirect('/');
    }

    public function destroy($id) {
        $destroy = tarefas::find($id);
        $destroy->delete();
        return redirect('/');
    }
}

