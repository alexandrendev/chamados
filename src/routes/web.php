<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});
