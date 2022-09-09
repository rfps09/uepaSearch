<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Professor;

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

Route::get('/', [Professor::class, 'getProfessores'])->name('home');
Route::get('/results', [Professor::class, 'getProfessores'])->name('results');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

Route::post('/professor/create', [Professor::class, 'create'])->name('create');

Route::get('/editar/{id}', [Professor::class, 'getProfessor'])->name('editar');

Route::post('/editarProfessor/{id}', [Professor::class, 'editar'])->name('editarProfessor');

Route::get('/deletarProfessor/{id}', [Professor::class, 'deletarProfessor'])->name('deletarProfessor');

Route::get('/deletar/{id}', [Professor::class, 'deletar'])->name('deletar');