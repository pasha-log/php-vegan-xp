<?php

// use App\Http\Livewire\VeganActionItem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::patch('/edit', [App\Http\Controllers\ProfileController::class, 'editProfile'])->name('edit');
});
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
// Route::livewire('/completeVeganAction', VeganActionItem::class)->name('completeVeganAction');
