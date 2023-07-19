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



// Creo la rotta per lo store della creation
Route::get('/create', [MainController::class, 'create'])
    ->name("create");

Route::post('\store', [MainController::class, 'store'])
    ->name('store');



// Creo la rotta per lo store della edit
Route::get('\edit\{id}', [MainController::class, 'edit'])
    ->name('edit');

Route::get('\update\{id}', [MainController::class, 'update'])
    ->name('update');


// Creo la rotta per lo store della delete
Route::post('\delete\{id}', [MainController::class, 'delete'])
    ->name('delete');
