<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');


Route::get('/services', [PostController::class, 'GetServices'])->name('services');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/galery', function () {
    return view('galery');
})->name('galery');

Route::get('/Frequently_asked_questions', function () {
    return view('questions');
})->name('questions');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
