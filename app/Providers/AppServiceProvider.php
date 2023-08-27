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
    }

    public function boot()
    {
        //
    }
}
