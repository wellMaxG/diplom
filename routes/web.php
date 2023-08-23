<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');



Route::prefix('user')->group(function() {
    Route::get('/cars', [CarController::class, 'index'])->name('user.cars');
    Route::get('/cars/create', [CarController::class, 'create'])->name('user.cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('user.cars.store');
    Route::get('/cars/{car}', [CarController::class, 'show'])->name('user.cars.show');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('user.cars.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('user.cars.update');
    Route::delete('/cars/{car}', [CarController::class, 'delete'])->name('user.cars.delete');
});

Route::prefix('admin')->group(function() {
    Route::get('/cars', [CarController::class, 'index'])->name('admin.cars');
    Route::get('/cars/create', [CarController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/{car}', [CarController::class, 'show'])->name('admin.cars.show');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{car}', [CarController::class, 'delete'])->name('admin.cars.delete');
});
