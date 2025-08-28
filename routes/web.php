<?php
use App\Http\Controllers\FuncionariosController;

use Illuminate\Support\Facades\Route;

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
Route::get('/mostrar', [FuncionariosController::class, 'mostrar'])->name('mostrar');


Route::get('/novo', [FuncionariosController::class, 'novo'])->name('novo');

Route::get('/adicionar', [FuncionariosController::class, 'adicionar'])->name('adicionar');

Route::get('/editar', [FuncionariosController::class, 'editar'])->name('editar');

Route::get('/atualizar', [FuncionariosController::class, 'atualizar'])->name('atualizar');

Route::get('/excluir', [FuncionariosController::class, 'excluir'])->name('excluir');
