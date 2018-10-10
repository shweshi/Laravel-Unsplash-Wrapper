<?php

namespace shweshi\LaravelUnsplashWrapper\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashPhotosServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UnsplashPhotos', function () {
            return new \shweshi\LaravelUnsplashWrapper\UnsplashPhotos();
        });
    }
}
