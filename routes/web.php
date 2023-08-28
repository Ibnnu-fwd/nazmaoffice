<?php

use App\Http\Controllers\Admin\AboutPageSettingController;
use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\CompanyAddressController;
use App\Http\Controllers\Admin\CompanyLandingSettingController;
use App\Http\Controllers\Admin\CompanySocialMediaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventParticipantController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\User\GalleryController as UserGalleryController;
use App\Http\Controllers\Admin\MilestoneController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceBenefitController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceProjectController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ServiceTestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('about', [AboutPageController::class, 'about'])->name('user.about');
Route::get('gallery', [UserGalleryController::class, 'gallery'])->name('user.gallery');
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

    // Company Landing Setting
    Route::group(['prefix' => 'company-landing-setting'], function () {
        Route::get('/', [CompanyLandingSettingController::class, 'index'])->name('admin.company-landing-setting');
        Route::post('store', [CompanyLandingSettingController::class, 'store'])->name('admin.company-landing-setting.store');
        Route::post('update', [CompanyLandingSettingController::class, 'update'])->name('admin.company-landing-setting.update');
    });

    // About Page Setting
    Route::group(['prefix' => 'about-page-setting'], function () {
        Route::get('/', [AboutPageSettingController::class, 'index'])->name('admin.about-page-setting');
        Route::post('store', [AboutPageSettingController::class, 'store'])->name('admin.about-page-setting.store');
        Route::post('update', [AboutPageSettingController::class, 'update'])->name('admin.about-page-setting.update');
    });

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

    // Event Participant
    Route::group(['prefix' => 'event-participant'], function () {
        Route::get('/', [EventParticipantController::class, 'index'])->name('admin.event-participant');
        Route::get('{event_id}/list', [EventParticipantController::class, 'list'])->name('admin.event-participant.list');
        Route::post('store', [EventParticipantController::class, 'store'])->name('admin.event-participant.store');
        Route::post('get-by-id', [EventParticipantController::class, 'getById'])->name('admin.event-participant.get-by-id');
        Route::post('{id}/update', [EventParticipantController::class, 'update'])->name('admin.event-participant.update');
        Route::post('{id}/destroy', [EventParticipantController::class, 'destroy'])->name('admin.event-participant.destroy');
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

    // Testimonial
    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial');
        Route::post('store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
        Route::post('get-by-id', [TestimonialController::class, 'getById'])->name('admin.testimonial.get-by-id');
        Route::post('{id}/update', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::post('{id}/destroy', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
    });

    // Team
    Route::group(['prefix' => 'team'], function () {
        Route::get('/', [TeamController::class, 'index'])->name('admin.team');
        Route::post('store', [TeamController::class, 'store'])->name('admin.team.store');
        Route::post('get-by-id', [TeamController::class, 'getById'])->name('admin.team.get-by-id');
        Route::post('{id}/update', [TeamController::class, 'update'])->name('admin.team.update');
        Route::post('{id}/destroy', [TeamController::class, 'destroy'])->name('admin.team.destroy');
    });

    // Gallery
    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery');
        Route::post('store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::post('get-by-id', [GalleryController::class, 'getById'])->name('admin.gallery.get-by-id');
        Route::post('{id}/update', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::post('{id}/destroy', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    });

    // Service Category
    Route::group(['prefix' => 'service-category'], function () {
        Route::get('/', [ServiceCategoryController::class, 'index'])->name('admin.service-category');
        Route::post('store', [ServiceCategoryController::class, 'store'])->name('admin.service-category.store');
        Route::post('get-by-id', [ServiceCategoryController::class, 'getById'])->name('admin.service-category.get-by-id');
        Route::post('{id}/update', [ServiceCategoryController::class, 'update'])->name('admin.service-category.update');
        Route::post('{id}/destroy', [ServiceCategoryController::class, 'destroy'])->name('admin.service-category.destroy');
    });

    // Service
    Route::group(['prefix' => 'service'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.service');
        Route::post('store', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::post('get-by-id', [ServiceController::class, 'getById'])->name('admin.service.get-by-id');
        Route::post('{id}/update', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::post('{id}/destroy', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
        Route::post('{id}/recover', [ServiceController::class, 'recover'])->name('admin.service.recover');

        // Service Benefit
        Route::get('{service_id}/benefit', [ServiceBenefitController::class, 'index'])->name('admin.service.benefit');
        Route::post('{service_id}/benefit/store', [ServiceBenefitController::class, 'store'])->name('admin.service.benefit.store');
        Route::post('benefit/{id}/update', [ServiceBenefitController::class, 'update'])->name('admin.service.benefit.update');
        Route::post('benefit/{id}/destroy', [ServiceBenefitController::class, 'destroy'])->name('admin.service.benefit.destroy');
        Route::post('benefit/get-by-id', [ServiceBenefitController::class, 'getById'])->name('admin.service.benefit.get-by-id');

        // Service Testimonial
        Route::get('{service_id}/testimonial', [ServiceTestimonialController::class, 'index'])->name('admin.service.testimonial');
        Route::post('{service_id}/testimonial/store', [ServiceTestimonialController::class, 'store'])->name('admin.service.testimonial.store');
        Route::post('testimonial/{id}/update', [ServiceTestimonialController::class, 'update'])->name('admin.service.testimonial.update');
        Route::post('testimonial/{id}/destroy', [ServiceTestimonialController::class, 'destroy'])->name('admin.service.testimonial.destroy');
        Route::post('testimonial/get-by-id', [ServiceTestimonialController::class, 'getById'])->name('admin.service.testimonial.get-by-id');
    });

    // Service Project
    Route::group(['prefix' => 'service-project'], function () {
        Route::get('/', [ServiceProjectController::class, 'index'])->name('admin.service-project');
        Route::get('{service_id}/list', [ServiceProjectController::class, 'list'])->name('admin.service-project.list');
        Route::post('store', [ServiceProjectController::class, 'store'])->name('admin.service-project.store');
        Route::post('get-by-id', [ServiceProjectController::class, 'getById'])->name('admin.service-project.get-by-id');
        Route::post('{id}/update', [ServiceProjectController::class, 'update'])->name('admin.service-project.update');
        Route::post('{id}/destroy', [ServiceProjectController::class, 'destroy'])->name('admin.service-project.destroy');
    });

    // FAQ
    Route::group(['prefix' => 'faq'], function () {
        Route::get('/', [FaqController::class, 'index'])->name('admin.faq');
        Route::post('store', [FaqController::class, 'store'])->name('admin.faq.store');
        Route::post('get-by-id', [FaqController::class, 'getById'])->name('admin.faq.get-by-id');
        Route::post('{id}/update', [FaqController::class, 'update'])->name('admin.faq.update');
        Route::post('{id}/destroy', [FaqController::class, 'destroy'])->name('admin.faq.destroy');
    });
});

require __DIR__ . '/auth.php';