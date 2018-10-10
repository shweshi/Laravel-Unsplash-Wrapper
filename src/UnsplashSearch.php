<?php

namespace shweshi\LaravelUnsplashWrapper;

class UnsplashSearch extends BaseClass
{
    /**
     * Search for the photos with search query.
     *
     * @param string $query
     * @param array  $params
     *
     * @return mixed
     */
    public function photos($query, array $params)
    {
        $params['query'] = $query;

        return $this->call('search/photos', $params);
    }

    /**
     * Search for the collections with search query.
     *
     * @param string $query
     * @param array  $params
     *
     * @return mixed
     */
    public function collections($query, array $params)
    {
        $params['query'] = $query;

        return $this->call('search/collections', $params);
    }

    /**
     * Search for the users with search query.
     *
     * @param string $query
     * @param array  $params
     *
     * @return mixed
     */
    public function users($query, array $params)
    {
        $params['query'] = $query;

        return $this->call('search/users', $params);
    }
}
