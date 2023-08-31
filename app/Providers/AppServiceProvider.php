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
        $this->app->bind(\App\Interfaces\ServiceInterface::class, \App\Repositories\ServiceRepository::class);
        $this->app->bind(\App\Interfaces\ServiceBenefitInterface::class, \App\Repositories\ServiceBenefitRepository::class);
        $this->app->bind(\App\Interfaces\ServiceTestimonialInterface::class, \App\Repositories\ServiceTestimonialRepository::class);
        $this->app->bind(\App\Interfaces\CompanyLandingSettingInterface::class, \App\Repositories\CompanyLandingSettingRepository::class);
        $this->app->bind(\App\Interfaces\EventParticipantInterface::class, \App\Repositories\EventParticipantRepository::class);
        $this->app->bind(\App\Interfaces\ServiceProjectInterface::class, \App\Repositories\ServiceProjectRepository::class);
        $this->app->bind(\App\Interfaces\FaqInterface::class, \App\Repositories\FaqRepository::class);
        $this->app->bind(\App\Interfaces\AboutPageSettingInterface::class, \App\Repositories\AboutPageSettingRepository::class);
        $this->app->bind(\App\Interfaces\CoachingScheduleInterface::class, \App\Repositories\CoachingScheduleRepository::class);
        $this->app->bind(\App\Interfaces\SubServiceInterface::class, \App\Repositories\SubServiceRepository::class);
        $this->app->bind(\App\Interfaces\EventSylabusInterface::class, \App\Repositories\EventSylabusRepository::class);
    }

    public function boot()
    {
        //
    }
}
