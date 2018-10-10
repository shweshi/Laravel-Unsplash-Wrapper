<?php

namespace shweshi\LaravelUnsplashWrapper\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashSearchServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UnsplashSearch', function () {
            return new \shweshi\LaravelUnsplashWrapper\UnsplashSearch();
        });
    }
}
