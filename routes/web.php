<?php

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

use App\Http\Controllers\tarefasController;

Route::get('/', [tarefasController::class, 'index']);

Route::get('/tarefa/novatarefa', [tarefasController::class, 'addTask']);

Route::post('/tarefa', [tarefasController::class, 'addBD']);

Route::get('/editar', [tarefasController::class, 'editBD']);

Route::put('/editar/{id}', [tarefasController::class, 'update'])->name('update');

Route::get('/editartarefa/{id}', [tarefasController::class, 'edit'])->name('edit');

Route::get('/deletar/{id}', [tarefasController::class, 'destroy'])->name('delete');
