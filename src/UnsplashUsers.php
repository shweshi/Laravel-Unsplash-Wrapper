<?php

namespace shweshi\LaravelUnsplashWrapper;

class UnsplashUsers extends BaseClass
{
    /**
     * Retrieve profile of the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function profile($username, array $params)
    {
        return $this->call('users/'.$username, $params);
    }

    /**
     * Retrieve portfolio url of the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function portfolio($username, array $params)
    {
        return $this->call('users/'.$username.'/portfolio', $params);
    }

    /**
     * Retrieve photos of the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function photos($username, array $params)
    {
        return $this->call('users/'.$username.'/photos', $params);
    }

    /**
     * Retrieve photos liked by the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function likes($username, array $params)
    {
        return $this->call('users/'.$username.'/likes', $params);
    }

    /**
     * Retrieve collections of the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function collections($username, array $params)
    {
        return $this->call('users/'.$username.'/collections', $params);
    }

    /**
     * Retrieve statistics of the user.
     *
     * @param string $username
     * @param array  $params
     *
     * @return mixed
     */
    public function statistics($username, array $params)
    {
        return $this->call('users/'.$username.'/statistics', $params);
    }
}
