<?php

use Illuminate\Support\Arr;

if (! function_exists('route_parameter')) {
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

        return Arr::get($routeInfo[2], $name, $default);
    }
}

if (! function_exists('app_path')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $path
     * @return string
     */
    function app_path($path = '')
    {
        return env('APP_PATH', base_path('app')) . ($path ? DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->configPath($path);
    }
}

if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param string $path
     *
     * @return string
     */
    function public_path($path = '')
    {
        return env('PUBLIC_PATH', base_path('public')) . ($path ? DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}

if (! function_exists('bcrypt')) {
    /**
     * Hash the given value against the bcrypt algorithm.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    function bcrypt($value, $options = [])
    {
        return app('hash')->driver('bcrypt')->make($value, $options);
    }
}
