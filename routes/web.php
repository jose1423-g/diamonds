<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', [PostController::class, 'GetServices'])->name('services');

Route::get('/gallery', [PostController::class, 'GetGallery'])->name('gallery');

Route::get('/Frequently_asked_questions', [PostController::class, 'GetQuestions'])->name('questions');

/* cambia el idioma de la pagina */
Route::get('greeting/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'es'])) {        
        App::setLocale($locale);
        Session::put('locale', $locale);
    }    
    return back();
})->name('en_es');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';