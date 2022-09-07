<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class professor extends Controller
{
    function create(Request $request) {
        $response = Http::post('http://localhost:3005/professor', [
            'id' => $request->matricula,
            'name' => $request->nome,
            'email' => $request->email,
            'phone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        return redirect(route('home'));
    }

    function getProfessores() {
        $response = Http::get('http://localhost:3005/professor');

        return view('index',['professores' => json_decode($response)]);
    }

    function getProfessor($id) {
        $response = Http::get('http://localhost:3005/professor/'.$id);

        return view('editar',['professor' => json_decode($response)]);
    }

    function editar($id,Request $request) {
        $response = Http::put('http://localhost:3005/professor/'.$id, [
            'name' => $request->nome,
            'email' => $request->email,
            'phone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        return redirect(route('home'));
    }

    function deletar($id) {
        $response = Http::get('http://localhost:3005/professor/'.$id);

        return view('deletar',['professor' => json_decode($response)]);
    }

    function deletarProfessor($id) {
        $response = Http::delete('http://localhost:3005/professor/'.$id);

        return redirect(route('home'));
    }
}
