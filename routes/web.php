<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/{category}', [HomeController::class, 'category'])->name('category');

// Route::get('/news', function () {
//     return view('pages.news');
// });
