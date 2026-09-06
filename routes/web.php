<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


// ===== Language Switcher =====
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// ===== Static Pages =====
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/properties', [PageController::class, 'properties'])->name('properties');
Route::get('/property/{id}', [PageController::class, 'show'])->name('property.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');


Route::get('/language/{locale}', function (string $locale) {

    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    session()->put('locale', $locale);

    return redirect()->back();

})->name('language.switch');