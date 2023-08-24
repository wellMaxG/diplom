<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/cars', [AdminController::class, 'index'])->name('admin.cars');
    Route::get('/cars/create', [AdminController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [AdminController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/{car}', [AdminController::class, 'show'])->name('admin.cars.show');
    Route::get('/cars/{car}/edit', [AdminController::class, 'edit'])->name('admin.cars.edit');
    Route::put('/cars/{car}', [AdminController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{car}', [AdminController::class, 'delete'])->name('admin.cars.delete');
});