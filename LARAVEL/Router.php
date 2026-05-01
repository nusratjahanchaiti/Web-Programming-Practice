<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

// Show all data
Route::get('/my', [MyController::class, 'index'])->name('my.index');

// Create form
Route::get('/my/create', [MyController::class, 'create'])->name('my.create');

// Store data
Route::post('/my', [MyController::class, 'store'])->name('my.store');

// Show single item
Route::get('/my/{id}', [MyController::class, 'show'])->name('my.show');

// Edit form
Route::get('/my/{id}/edit', [MyController::class, 'edit'])->name('my.edit');

// Update data
Route::put('/my/{id}', [MyController::class, 'update'])->name('my.update');

// Delete data
Route::delete('/my/{id}', [MyController::class, 'destroy'])->name('my.destroy');