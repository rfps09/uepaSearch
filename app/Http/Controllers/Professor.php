<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;

class professor extends Controller
{
    function create(Request $request) {
        $response = Http::post('http://localhost:3005/professor', [
            'name' => $request->nome,
            'email' => $request->email,
            'phone' => $request->telefone,
            'especialidade' => $request->especialidade,
        ]);

        return redirect(route('home'));
    }

    function getProfessores(Request $request) {
        $search = $request->query('search');

        if($search) {
            $search = explode(' ', $search);
            $searchTerms = [];

            foreach ($search as $term) {
                $professores = DB::table('professor')
                ->where('name','ilike','%'.$term.'%')
                ->get();
                if($professores->isNotEmpty()) {
                    $searchTerm = ['name','ilike','%'.$term.'%'];
                    array_push($searchTerms,$searchTerm);
                }
            }

            $professores = DB::table('professor')
            ->where($searchTerms)
            ->get();
        } else {
            $response = Http::get('http://localhost:3005/professor');
            return view('index',['professores' => json_decode($response)]);
        }

        return view('index',['professores' => $professores]);
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
