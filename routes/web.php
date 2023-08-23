<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('about', [HomeController::class, 'about'])->name('user.about');
Route::get('gallery', [HomeController::class, 'gallery'])->name('user.gallery');


Route::get('/loginPage', [AdminController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin'], function() {
    
    // Dashboard
        
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/blog', [AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/crew', [AdminController::class, 'crew'])->name('admin.crew');
    Route::get('/addcrew', [AdminController::class, 'addcrew'])->name('admin.addcrew');
    Route::get('/project', [AdminController::class, 'project'])->name('admin.project');
    Route::get('/testimony', [AdminController::class, 'testimony'])->name('admin.testimony');
    Route::get('/trainers', [AdminController::class, 'trainers'])->name('admin.trainers');
    Route::get('/partnership', [AdminController::class, 'partnership'])->name('admin.partnership');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::get('/sidebar', [AdminController::class, 'sidebar'])->name('admin.sidebar');



});

require __DIR__ . '/auth.php';