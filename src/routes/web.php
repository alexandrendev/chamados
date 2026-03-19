<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('chamados', ChamadoController::class);
Route::resource('tecnicos', TecnicoController::class);
