<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SetorController;

Route::get('/', [ContatoController::class, 'list'])->name('index');
Route::get('/contato/{id}', [ContatoController::class, 'contato'])->name('contato');

Route::get('/setores', [SetorController::class, 'list'])->name('setores');
Route::get('/setor/{id}', [SetorController::class, 'setor'])->name('setor');

