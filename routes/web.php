<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\professor;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

Route::get('/editar', function () {
    return view('editar');
})->name('editar');

Route::get('/deletar', function () {
    return view('deletar');
})->name('deletar');

Route::get('/professor/create', [professor::class, 'create']);

Route::get('/professores', [professor::class, 'getProfessores']);