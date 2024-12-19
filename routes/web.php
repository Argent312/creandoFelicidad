<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/conciertos', [App\Http\Controllers\semaforoController::class, 'conciertos'])->name('conciertos');
Route::get('/musica', [App\Http\Controllers\semaforoController::class, 'musica'])->name('musica');