<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\KnjigaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::resource('proizvodi', ProizvodController::class);

Route::get('/knjige', [KnjigaController::class, 'index'])->name('knjige.index');