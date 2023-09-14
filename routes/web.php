<?php

use App\Http\Livewire\VeganActionItem;
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
});
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::livewire('/completeVeganAction', VeganActionItem::class);
// EmailVerificationRequest::route('verify', 'verification.verify');

// @if (in_array($item->id, $completedVeganActions))
// <button wire:click="processCompletedVeganActionData(veganActionId)" class="m-2 p-4 border-2 rounded-lg bg-green-700 text-white hover:bg-yellow-400">{{ __('Complete!') }}</button>
// @else
// <button class="m-2 p-4 border-2 rounded-lg text-white bg-yellow-400">{{ __('Completed!') }}</button>
// @endif