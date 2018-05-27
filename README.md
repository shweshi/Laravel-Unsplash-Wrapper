# LaravelUnsplashWrapper

**A Laravel wrapper for Unsplash.**

## Install

Via Composer

``` bash
$ composer require shweshi/laravel-unsplash-wrapper
```
If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:

```
shweshi\LaravelUnsplashWrapper\Providers\LaravelUnsplashServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\LaravelUnsplashSearchServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\LaravelUnsplashUsersServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\LaravelUnsplashPhotosServiceProvider::class,
shweshi\LaravelUnsplashWrapper\Providers\LaravelUnsplashCollectionsServiceProvider::class,
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
    'ApplicationID' => 'YOUR APPLICATION ID HERE',
];
```
## Usage
See documention for params and others at [unsplash docs](https://unsplash.com/documentation)

List of methods: 

### Photos

``` php
use UnsplashPhotos;

$photos        = UnsplashPhotos::photos($params);          // list of all photos
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
