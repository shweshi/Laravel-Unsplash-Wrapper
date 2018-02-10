<?php

namespace shweshi\LaravelUnsplashWrapper\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashCollectionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/unsplash.php' => config_path('unsplash.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UnsplashCollections', function() {
            return new \shweshi\LaravelUnsplashWrapper\UnsplashCollections;
        });
    }
}