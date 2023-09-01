<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
// use App\Http\Livewire\LoginForm;
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

// Route::get('/', function () {
//     return view('home');
// });

// Laravel 8 (New)
// Route::get('/products', 
//     [ProductsController::class, 'index'])->name('products');

Route::get('/', [ProductsController::class, 'index']);
// Route::get('/login', LoginForm::class)->name('login-form');
// Route::get('/products/about', [ProductsController::class, 'about']);

// Route::get('/products/{name}', [ProductsController::class, 'show']);

// Pattern is integer
// Route::get('/products/{id}', [ProductsController::class, 'show']->where('id', '[0-9]+'));

// Pattern is string
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
//     'name' => '[a-z]+',
//     'id' => '[0-9]+'
// ]);
Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
