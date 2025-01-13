<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('galery', GaleryController::class)->only(['create','index', 'store', 'edit', 'update', 'destroy']);

Route::resource('promo', PromoController::class)->only(['create','index', 'store', 'edit', 'update', 'destroy']);

require __DIR__.'/auth.php';

