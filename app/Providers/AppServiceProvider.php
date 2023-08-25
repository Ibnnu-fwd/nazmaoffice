<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(\App\Interfaces\BlogInterface::class, \App\Repositories\BlogRepository::class);
        $this->app->bind(\App\Interfaces\BlogCategoryInterface::class, \App\Repositories\BlogCategoryRepository::class);
    }

    public function boot()
    {
        //
    }
}
