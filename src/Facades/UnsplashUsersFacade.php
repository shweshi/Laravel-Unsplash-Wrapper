<?php

namespace shweshi\LaravelUnsplashWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashUsersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashUsers';
    }
}