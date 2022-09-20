<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pokemonController;
use App\Http\Controllers\gestaoController;

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
    return view('welcome');
});

Route::get('/pokemon', [pokemonController::class, 'index']);

// Routes Gestão
Route::get('/gestao', [gestaoController::class, 'index'])->name('gestao.index');
Route::get('/gestao/contato', [gestaoController::class, 'contato'])->name('gestao.contato');
Route::get('/gestao/sobre-nos', [gestaoController::class, 'sobreNos'])->name('gestao.sobre-nos');
