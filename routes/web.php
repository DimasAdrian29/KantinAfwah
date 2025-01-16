<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KutipanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\LandingController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('menu', MenuController::class);

Route::resource('about', AboutController::class);

// Route::get('/aboutus', function () {
//     return view('about');
// });

// Route::get('/aboutus', function () {
//     return view('about');
// });

Route::resource('kutipan', KutipanController::class);


Route::get('/kantinafwah', [HomeController::class, 'home'])->name('KantinAfwah.home');
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

Route::resource('sliders', SliderController::class)->only(['index', 'store','destroy','create','edit','update']);
Route::resource('question_answer', QuestionAnswerController::class)->only(['index', 'store','edit','update','destroy']);
Route::get('/landing', [LandingController::class, 'index'])->name('home');
Route::resource('galery', GaleryController::class)->only(['create','index', 'store', 'edit', 'update', 'destroy']);
Route::resource('promo', PromoController::class)->only(['create','index', 'store', 'edit', 'update', 'destroy']);

require __DIR__.'/auth.php';


