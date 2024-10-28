<?php

namespace Rayhan\Slug;

use Rayhan\Slug\SlugGenerator;
use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SlugGenerator::class, function () {
            return new SlugGenerator();
        });
    }

    public function boot()
    {
        // If you need to publish any config, routes, or views, you can do it here
    }
}
