<?php
/**
 * Created by PhpStorm.
 * User: shweshi
 * Date: 10/2/18
 * Time: 7:59 PM
 */

namespace shweshi\LaravelUnsplashWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashCollectionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashCollections';
    }
}