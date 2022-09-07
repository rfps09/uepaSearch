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

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

Route::get('/editar/{id}', [Professor::class, 'getProfessor'])->name('editar');

Route::get('/deletar', function () {
    return view('deletar');
})->name('deletar');

Route::post('/professor/create', [Professor::class, 'create'])->name('create');