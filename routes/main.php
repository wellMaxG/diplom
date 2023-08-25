<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home.index')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');


