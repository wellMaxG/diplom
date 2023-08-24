<?php


use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function() {
    Route::get('/cars', [UserController::class, 'index'])->name('user.cars');
    Route::get('/cars/create', [UserController::class, 'create'])->name('user.cars.create');
    Route::post('/cars', [UserController::class, 'store'])->name('user.cars.store');
    Route::get('/cars/{car}', [UserController::class, 'show'])->name('user.cars.show');
    Route::get('/cars/{car}/edit', [UserController::class, 'edit'])->name('user.cars.edit');
    Route::put('/cars/{car}', [UserController::class, 'update'])->name('user.cars.update');
    Route::delete('/cars/{car}', [UserController::class, 'delete'])->name('user.cars.delete');
});