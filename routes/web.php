<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('about', [HomeController::class, 'about'])->name('user.about');
Route::get('gallery', [HomeController::class, 'gallery'])->name('user.gallery');

require __DIR__ . '/auth.php';
