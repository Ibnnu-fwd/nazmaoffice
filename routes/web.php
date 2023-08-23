<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('about', [HomeController::class, 'about'])->name('user.about');

Route::group(['prefix' => 'admin'], function() {
    
    // Dashboard
    
    Route::get('/auth', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

});

require __DIR__ . '/auth.php';