<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class professor extends Controller
{
    function create() {
        $request = Http::post('http://localhost:3005/professor', [
            'id' => '2',
            'name' => 'Anderson Jorge',
            'email' => 'andersonJorge@gmail.com',
            'phone' => '19123456789',
            'especialidade' => 'UML',
        ]);

        dd($request);
    }

    function getProfessores() {
        $request = Http::get('http://localhost:3005/professor');

        dd(json_decode($request));
    }
}
