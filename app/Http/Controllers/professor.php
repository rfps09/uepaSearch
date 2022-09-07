<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class professor extends Controller
{
    function create(Request $request) {
        $request = Http::post('http://localhost:3005/professor', [
            'id' => $request->matricula,
            'name' => $request->nome,
            'email' => $request->email,
            'phone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        dd($request);
    }

    function getProfessores() {
        $request = Http::get('http://localhost:3005/professor');

        return view('index',['professores' => json_decode($request)]);
    }

    function getProfessor($id) {
        $request = Http::get('http://localhost:3005/professor/'.$id);

        return view('editar',['professor' => json_decode($request)]);
    }

    function deletar($id) {
        $request = Http::delete('http://localhost:3005/professor/'.$id);

        return redirect(route('home'));
    }
}
