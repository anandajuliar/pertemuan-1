<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Dashboard bawaan Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// TUGAS PERTEMUAN 2: Route ke Halaman About
// Pastikan AboutController sudah dibuat dengan 'php artisan make:controller AboutController'
Route::get('/about', [AboutController::class, 'index'])
    ->middleware(['auth'])
    ->name('about');

require __DIR__.'/auth.php';