<?php

if ( ! function_exists('route_parameter'))
{
    /**
     * Get a given parameter from the route.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return string|object
     */
    function route_parameter($name, $default = null)
    {
        $routeInfo = app('request')->route();

        return array_get($routeInfo[2], $name, $default);
    }
}

if ( ! function_exists('database_path'))
{
    /**
     * Get the database path.
     *
     * @param  string  $path
     * @return string
     */
    function database_path($path = '')
    {
        return app()->databasePath().($path ? '/'.$path : $path);
    }
}

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = '')
    {
        return base_path('config').($path ? '/'.$path : $path);
    }
}

if ( ! function_exists('public_path'))
{
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */
    function public_path($path = '')
    {
        return env('PUBLIC_PATH', base_path('public')).($path ? '/'.$path : $path);
    }
}
