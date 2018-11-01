# LaravelUnsplashWrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shweshi/Laravel-Unsplash-Wrapper.svg?style=flat-square)](https://packagist.org/packages/shweshi/Laravel-Unsplash-Wrapper)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/shweshi/Laravel-Unsplash-Wrapper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/shweshi/Laravel-Unsplash-Wrapper/?branch=master)
[![StyleCI](https://styleci.io/repos/121030344/shield?branch=master)](https://styleci.io/repos/121030344)
[![Build Status](https://scrutinizer-ci.com/g/shweshi/Laravel-Unsplash-Wrapper/badges/build.png?b=master)](https://scrutinizer-ci.com/g/shweshi/Laravel-Unsplash-Wrapper/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/shweshi/Laravel-Unsplash-Wrapper.svg?style=flat-square)](https://packagist.org/packages/shweshi/Laravel-Unsplash-Wrapper)

**A Laravel wrapper for Unsplash.**

## Install

Via Composer

``` bash
$ composer require shweshi/laravel-unsplash-wrapper
```
If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:

```
shweshi\LaravelUnsplashWrapper\Providers\UnsplashServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\UnsplashSearchServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\UnsplashUsersServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\UnsplashPhotosServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\UnsplashCollectionsServiceProvider::class,
```

If you do run the package on Laravel 5.5+, package auto-discovery takes care of the magic of adding the service provider.

Next under the alias array in config/app.php add

```
'UnsplashSearch' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashSearchFacade::class,
'UnsplashUsers' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashUsersFacade::class,
'UnsplashPhotos' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashPhotosFacade::class,
'UnsplashCollections' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashCollectionsFacade::class,
```

You must publish the configuration to provide an own service provider stub.

``` bash
$ php artisan vendor:publish --provider="shweshi\LaravelUnsplashWrapper\Providers\UnsplashServiceProvider"
```

Update your settings in the generated app/config/unsplash.php configuration file.
```
return [
    'ApplicationID' => 'YOUR APPLICATION ACCES KEY HERE',
];
```
## Usage
See documention for params and others at [unsplash docs](https://unsplash.com/documentation)

List of methods: 

### Photos

``` php

$photos        = UnsplashPhotos::photos([]);          // list of all photos
$photo         = UnsplashPhotos::single($id, $params);     // single photo
$statistic     = UnsplashPhotos::statistic($id, $params);  // single photo statistics
$downloadUrl   = UnsplashPhotos::download($id, $params);   // single photo download link
$curatedPhotos = UnsplashPhotos::curated($params);         // list of curated photos
$randomPhoto   = UnsplashPhotos::random($params);          // random photo
```

### Users

``` php
use UnsplashUsers;

$user         = UnsplashUsers::profile($username, $params);      // single user
$portfolio    = UnsplashUsers::portfolio($username);             // single user's portfolio
$photos       = UnsplashUsers::photos($username, $params);       // single user's photos
$photos       = UnsplashUsers::likes($username, $params);        // single user's likes
$collections  = UnsplashUsers::collections($username, $params);  // single user's collections
$statistics   = UnsplashUsers::statistics($username, $params);   // single user's statistics
```

### Collections

``` php
use UnsplashCollections;

$collection  = UnsplashCollections::collections($params);    // list of all collections
$collection  = UnsplashCollections::single($id, $params);    // single collections
$photos      = UnsplashCollections::photos($id, $params);    // collection photos
$statistic   = UnsplashCollections::statistic($id, $params); // single collections statistics
$collection  = UnsplashCollections::curated($params);        // list of curated collections
$collection  = UnsplashCollections::related($id, $params);   // list of related collections
$collection  = UnsplashCollections::featured($params);       // list of featured collections
```

### Search

``` php
use UnsplashSearch;

$photos     = UnsplashSearch::photo($query, $params);
$collection = UnsplashSearch::collection($query, $params);
$user       = UnsplashSearch::user($query, $params);
```

### Example

`echo UnsplashPhotos::photos(['page' => 1, 'order_by' => 'oldest']);`

will get you something like
```json
ixlib=rb-0.3.5\u0026q=80\u0026fm=jpg\u0026crop=faces\u0026cs=tinysrgb\u0026fit=crop\u0026h=64\u0026w=64\u0026s=4ddd6656ddd74206872f45c033371087","large":"https://images.unsplash.com/profile-1441298310363-3eb4b1feb829?
.....
```
which you will need to format

