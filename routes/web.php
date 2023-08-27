<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\CompanyAddressController;
use App\Http\Controllers\Admin\CompanySocialMediaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MilestoneController;
use App\Http\Controllers\Admin\PartnerController;
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
        Route::post('get-by-id', [BlogController::class, 'getById'])->name('admin.blog.get-by-id');
        Route::post('update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::post('store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::post('destroy/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
        Route::get('show/{id}', [BlogController::class, 'show'])->name('admin.blog.show');
    });

    // Blog Category
    Route::prefix('blog-category')->group(function () {
        Route::post('destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.blog-category.destroy');
        Route::post('update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blog-category.update');
        Route::post('store', [BlogCategoryController::class, 'store'])->name('admin.blog-category.store');
        Route::post('get-by-id', [BlogCategoryController::class, 'getById'])->name('admin.blog-category.get-by-id');
        Route::get('/', [BlogCategoryController::class, 'index'])->name('admin.blog-category');
    });

    // Event
    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('admin.event');
        Route::get('setting', [EventController::class, 'setting'])->name('admin.event.setting');
        Route::post('setting/new', [EventController::class, 'settingNew'])->name('admin.event.setting.new');
        Route::post('setting/update', [EventController::class, 'settingUpdate'])->name('admin.event.setting.update');
        Route::post('destroy/{id}', [EventController::class, 'destroy'])->name('admin.event.destroy');
        Route::post('update/{id}', [EventController::class, 'update'])->name('admin.event.update');
        Route::post('store', [EventController::class, 'store'])->name('admin.event.store');
        Route::post('get-by-id', [EventController::class, 'getById'])->name('admin.event.get-by-id');
        Route::post('activate/{id}', [EventController::class, 'activate'])->name('admin.event.activate');

        // Event Rundown
        Route::get('event/{id}/rundown', [EventController::class, 'rundown'])->name('admin.event.rundown');
        Route::post('event/{id}/rundown/store', [EventController::class, 'rundownStore'])->name('admin.event.rundown.store');
        Route::post('rundown/{id}/destroy', [EventController::class, 'rundownDestroy'])->name('admin.event.rundown.destroy');
        Route::post('rundown/get-by-id', [EventController::class, 'rundownGetById'])->name('admin.event.rundown.get-by-id');
        Route::post('rundown/{id}/update', [EventController::class, 'rundownUpdate'])->name('admin.event.rundown.update');

        // Event Speaker
        Route::get('event/{id}/speaker', [EventController::class, 'speaker'])->name('admin.event.speaker');
        Route::post('event/{id}/speaker/store', [EventController::class, 'speakerStore'])->name('admin.event.speaker.store');
        Route::post('speaker/{id}/destroy', [EventController::class, 'speakerDestroy'])->name('admin.event.speaker.destroy');
        Route::post('speaker/get-by-id', [EventController::class, 'speakerGetById'])->name('admin.event.speaker.get-by-id');
        Route::post('speaker/{id}/update', [EventController::class, 'speakerUpdate'])->name('admin.event.speaker.update');
    });

    // Milestone
    Route::group(['prefix' => 'milestone'], function () {
        Route::get('/', [MilestoneController::class, 'index'])->name('admin.milestone');
        Route::post('store', [MilestoneController::class, 'store'])->name('admin.milestone.store');
        Route::post('get-by-id', [MilestoneController::class, 'getById'])->name('admin.milestone.get-by-id');
        Route::post('{id}/update', [MilestoneController::class, 'update'])->name('admin.milestone.update');
        Route::post('{id}/destroy', [MilestoneController::class, 'destroy'])->name('admin.milestone.destroy');
    });

    // Partner
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', [PartnerController::class, 'index'])->name('admin.partner');
        Route::post('store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::post('get-by-id', [PartnerController::class, 'getById'])->name('admin.partner.get-by-id');
        Route::post('{id}/update', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('{id}/destroy', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');
    });

    // Company Addresses
    Route::group(['prefix' => 'company-address'], function () {
        Route::get('/', [CompanyAddressController::class, 'index'])->name('admin.company-address');
        Route::post('store', [CompanyAddressController::class, 'store'])->name('admin.company-address.store');
        Route::post('get-by-id', [CompanyAddressController::class, 'getById'])->name('admin.company-address.get-by-id');
        Route::post('{id}/update', [CompanyAddressController::class, 'update'])->name('admin.company-address.update');
        Route::post('{id}/destroy', [CompanyAddressController::class, 'destroy'])->name('admin.company-address.destroy');
    });

    // Company Social Media
    Route::group(['prefix' => 'company-social-media'], function () {
        Route::get('/', [CompanySocialMediaController::class, 'index'])->name('admin.company-social-media');
        Route::post('store', [CompanySocialMediaController::class, 'store'])->name('admin.company-social-media.store');
        Route::post('get-by-id', [CompanySocialMediaController::class, 'getById'])->name('admin.company-social-media.get-by-id');
        Route::post('{id}/update', [CompanySocialMediaController::class, 'update'])->name('admin.company-social-media.update');
        Route::post('{id}/destroy', [CompanySocialMediaController::class, 'destroy'])->name('admin.company-social-media.destroy');
    });

    Route::get('/crew', [AdminController::class, 'crew'])->name('admin.crew');
    Route::get('/project', [AdminController::class, 'project'])->name('admin.project');
    Route::get('/testimony', [AdminController::class, 'testimony'])->name('admin.testimony');
    Route::get('/trainers', [AdminController::class, 'trainers'])->name('admin.trainers');
    Route::get('/partnership', [AdminController::class, 'partnership'])->name('admin.partnership');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::get('/sidebar', [AdminController::class, 'sidebar'])->name('admin.sidebar');
    Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
});

require __DIR__ . '/auth.php';
