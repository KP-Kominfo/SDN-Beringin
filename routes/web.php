<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');