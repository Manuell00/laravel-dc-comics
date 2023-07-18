<?php

use Illuminate\Support\Facades\Route;

// Importo il controller
use App\Http\Controllers\MainController;

// Creo la route per l'index
Route::get('/', [MainController::class, 'index'])
    ->name("index");

// Creo la route per la show
Route::get('/show/{id}', [MainController::class, 'show'])
    ->name("show");

// Creo la route per la show
Route::get('/create', [MainController::class, 'create'])
    ->name("create");

// Creo la rotta per lo store della creation
Route::post('\store', [MainController::class, 'store'])
    ->name('store');
