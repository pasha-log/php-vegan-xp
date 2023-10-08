<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/rewards', [App\Http\Controllers\RewardsController::class, 'index'])->name('rewards');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::patch('/edit', [App\Http\Controllers\ProfileController::class, 'editProfile'])->name('edit');
    Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'index'])->name('leaderboard');
});
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

/**
 * 
 * Remove unnecessary DB calls, and replace with Eloquent.
 * Properly add seeding and add to README accordingly.
 * Change names of Models.
 * Add additional validation in the backend.
 */