<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home'])->name('KantinAfwah.home');
Route::get('/career', [HomeController::class, 'career'])->name('KantinAfwah.career');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('KantinAfwah.about_us');
Route::get('/news', [HomeController::class, 'news'])->name('KantinAfwah.news');
Route::get('/ourbrands', [HomeController::class, 'ourbrands'])->name('KantinAfwah.ourbrands');
Route::get('/login', [HomeController::class, 'login'])->name('KantinAfwah.login');
Route::get('/register', [HomeController::class, 'register'])->name('KantinAfwah.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
