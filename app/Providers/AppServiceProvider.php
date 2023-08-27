<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(\App\Interfaces\BlogInterface::class, \App\Repositories\BlogRepository::class);
        $this->app->bind(\App\Interfaces\BlogCategoryInterface::class, \App\Repositories\BlogCategoryRepository::class);
        $this->app->bind(\App\Interfaces\EventInterface::class, \App\Repositories\EventRepository::class);
        $this->app->bind(\App\Interfaces\MilestoneInterface::class, \App\Repositories\MilestoneRepository::class);
        $this->app->bind(\App\Interfaces\PartnerInterface::class, \App\Repositories\PartnerRepository::class);
        $this->app->bind(\App\Interfaces\CompanyAddressInterface::class, \App\Repositories\CompanyAddressRepository::class);
        $this->app->bind(\App\Interfaces\CompanySocialMediaInteface::class, \App\Repositories\CompanySocialMediaRepository::class);
        $this->app->bind(\App\Interfaces\TestimonialInterface::class, \App\Repositories\TestimonialRepository::class);
        $this->app->bind(\App\Interfaces\TeamInterface::class, \App\Repositories\TeamRepository::class);
        $this->app->bind(\App\Interfaces\GalleryInterface::class, \App\Repositories\GalleryRepository::class);
        $this->app->bind(\App\Interfaces\ServiceCategoryInterface::class, \App\Repositories\ServiceCategoryRepository::class);
    }

    public function boot()
    {
        //
    }
}
