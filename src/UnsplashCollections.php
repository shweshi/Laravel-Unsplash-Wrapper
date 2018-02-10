<?php

namespace shweshi\LaravelUnsplashWrapper;

class UnsplashCollections extends BaseClass
{
    /**
     * Retrieve a single page from the list of all collections.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function collections(array $params)
    {
        return $this->call('collections', $params);
    }

    /**
     * Retrieve a single page from the list of featured collections.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function featured(array $params)
    {
        return $this->call('collections/featured', $params);
    }

    /**
     * Retrieve a single page from the list of curated collections.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function curated(array $params)
    {
        return $this->call('collections/curated', $params);
    }

    /**
     * Retrieve a collection using id.
     *
     * @param  string  $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function single($id, array $params)
    {
        return $this->call('collections/'.$id, $params);
    }

    /**
     * Retrieve a collection’s photos.
     *
     * @param  string  $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function photos($id, array $params)
    {
        return $this->call('collections/'.$id.'photos', $params);
    }

    /**
     * Retrieve a list of collections related to this one.
     *
     * @param  string  $id
     * @param  array  $params
     *
     * @return mixed
     */
    public function related($id, array $params)
    {
        return $this->call('collections/'.$id.'related', $params);
    }
}