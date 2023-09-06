<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home.index')->name('home');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function(){
    
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');
    
    Route::get('service', [ServiceController::class, 'index'])->name('service');
    Route::get('service/{service}', [ServiceController::class, 'show'])->name('service.show');
    Route::post('service/{service}/', [ServiceController::class, 'show'])->name('service.show');

});



