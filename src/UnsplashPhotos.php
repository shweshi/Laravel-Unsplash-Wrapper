<?php

namespace shweshi\LaravelUnsplashWrapper;

class UnsplashPhotos extends BaseClass
{
    /**
     * Retrieve a single page from the list of all photos.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function photos(array $params)
    {
        return $this->call('photos', $params);
    }

    /**
     * Retrieve curated list of photos.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function curated(array $params)
    {
        return $this->call('photos/curated', $params);
    }

    /**
     * Retrieve a single photo using id.
     *
     * @param  string  $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function single($id, array $params)
    {
        return $this->call('photos/'.$id, $params);
    }

    /**
     * Retrieve a random photo.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function random(array $params)
    {
        return $this->call('photos/random', $params);
    }

    /**
     * Retrieve statistics of the photo.
     *
     * @param  string $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function statistics($id, array $params)
    {
        return $this->call('/photos/'.$id.'/statistics', $params);
    }

    /**
     * Retrieve download link of the photo.
     *
     * @param  string $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function download($id, array $params)
    {
        return $this->call('/photos/'.$id.'/download', $params);
    }
}