<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'home'])->name('home');
Route::get('/film', [MovieController::class, 'index'])->name('movies.index');
Route::get('/film/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/tentang', [MovieController::class, 'about'])->name('about');