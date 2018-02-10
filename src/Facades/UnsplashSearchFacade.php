<?php

namespace shweshi\LaravelUnsplashWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashSearchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashSearch';
    }
}