<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CkeditorController;


use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('about', [HomeController::class, 'about'])->name('user.about');
Route::get('gallery', [HomeController::class, 'gallery'])->name('user.gallery');
Route::get('blog', [HomeController::class, 'blog'])->name('user.blog');
Route::get('blog/{id}', [HomeController::class, 'blogDetail'])->name('user.blog.detail');
Route::get('event', [HomeController::class, 'event'])->name('user.event');
Route::get('event/{id}', [HomeController::class, 'eventDetail'])->name('user.event.detail');
Route::get('service', [HomeController::class, 'service'])->name('user.service');
Route::get('service/{id}', [HomeController::class, 'serviceDetail'])->name('user.service.detail');

Route::get('/login-page', [AdminController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin'], function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Blog
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog');
    });

    // Blog Category
    Route::prefix('blog-category')->group(function () {
        Route::post('destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.blog-category.destroy');
        Route::post('update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blog-category.update');
        Route::post('store', [BlogCategoryController::class, 'store'])->name('admin.blog-category.store');
        Route::post('get-by-id', [BlogCategoryController::class, 'getById'])->name('admin.blog-category.get-by-id');
        Route::get('/', [BlogCategoryController::class, 'index'])->name('admin.blog-category');
    });

    Route::get('/crew', [AdminController::class, 'crew'])->name('admin.crew');
    Route::get('/project', [AdminController::class, 'project'])->name('admin.project');
    Route::get('/testimony', [AdminController::class, 'testimony'])->name('admin.testimony');
    Route::get('/trainers', [AdminController::class, 'trainers'])->name('admin.trainers');
    Route::get('/partnership', [AdminController::class, 'partnership'])->name('admin.partnership');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::get('/event', [AdminController::class, 'event'])->name('admin.event');
    Route::get('/sidebar', [AdminController::class, 'sidebar'])->name('admin.sidebar');
    Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
});

require __DIR__ . '/auth.php';
