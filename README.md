# LaravelUnsplashWrapper

**A Laravel wrapper for Unsplash.**

## Install

Via Composer

``` bash
$ composer require shweshi/laravel-unsplash-wrapper
```
If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:

```
shweshi\LaravelUnsplashWrapper\LaravelUnsplashServiceProvider:class,
shweshi\LaravelUnsplashWrapper\LaravelUnsplashSearchServiceProvider:class,
shweshi\LaravelUnsplashWrapper\LaravelUnsplashUsersServiceProvider:class
shweshi\LaravelUnsplashWrapper\LaravelUnsplashPhotosServiceProvider:class,
shweshi\LaravelUnsplashWrapper\LaravelUnsplashCollectionsServiceProvider:class
```
Next under the alias array

```
'UnsplashSearch' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashSearchFacade::class,
'UnsplashUsers' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashUsersFacade::class,
'UnsplashPhotos' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashPhotosFacade::class,
'UnsplashCollections' => shweshi\LaravelUnsplashWrapper\Facades\UnsplashCollectionsFacade::class
```

If you do run the package on Laravel 5.5+, package auto-discovery takes care of the magic of adding the service provider.

You must publish the configuration to provide an own service provider stub.

``` bash
$ php artisan vendor:publish --provider="shweshi\LaravelUnsplashWrapper\LaravelUnsplashServiceProvider"
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

$photos        = UnsplashPhotos::photos($params)->get();          // list of all photos
$photo         = UnsplashPhotos::single($id, $params)->get();     // single photo
$statistic     = UnsplashPhotos::statistic($id, $params)->get();  // single photo statistics
$downloadUrl   = UnsplashPhotos::download($id);                   // single photo download link
$curatedPhotos = UnsplashPhotos::curated($params)->get();         // list of curated photos
$randomPhoto   = UnsplashPhotos::random($params)->get();          // random photo
```

### Users

``` php
use UnsplashUsers;

$user         = UnsplashUsers::single($username, $params)->get();       // single user
$portfolio    = UnsplashUsers::portfolio($username);                    // single user's portfolio
$photos       = UnsplashUsers::photos($username, $params)->get();       // single user's photos
$photos       = UnsplashUsers::likes($username, $params)->get();        // single user's likes
$collections  = UnsplashUsers::collections($username, $params)->get();  // single user's collections
$statistics   = UnsplashUsers::statistics($username, $params)->get();   // single user's statistics
```

### Collections

``` php
use UnsplashCollections;

$collection  = UnsplashCollections::collections($params)->get(); // list of all collections
$collection  = UnsplashCollections::single($id)->get(); // single collections
$photos      = UnsplashCollections::photos($id, $params)->get(); // collection photos
$statistic   = UnsplashCollections::statistic($id, $params)->get(); // single collections statistics
$collection  = UnsplashCollections::curated($params)->get(); // list of curated collections
$collection  = UnsplashCollections::related($id)->get(); // list of related collections
$collection  = UnsplashCollections::featured($params)->get(); // list of featured collections
```

### Search

``` php
use UnsplashSearch;

$photos     = UnsplashSearch::photo($query, $params)->get();
$collection = UnsplashSearch::collection($query, $params)->get();
$user       = UnsplashSearch::user($query, $params)->get();
```