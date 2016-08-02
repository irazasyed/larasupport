<?php

if (!function_exists('route_parameter')) {
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

if (!function_exists('database_path')) {
    /**
     * Get the database path.
     *
     * @param string $path
     *
     * @return string
     */
    function database_path($path = '')
    {
        return app()->databasePath().($path ? '/'.$path : $path);
    }
}

if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     *
     * @return string
     */
    function config_path($path = '')
    {
        return base_path('config').($path ? '/'.$path : $path);
    }
}

if (!function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param string $path
     *
     * @return string
     */
    function public_path($path = '')
    {
        return env('PUBLIC_PATH', base_path('public')).($path ? '/'.$path : $path);
    }
}

if (!function_exists('elixir')) {
    /**
     * Get the path to a versioned Elixir file.
     *
     * @param string $file
     * @param string $buildDirectory
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    function elixir($file, $buildDirectory = 'build')
    {
        static $manifest;
        static $manifestPath;

        $buildBase = ($buildDirectory !== 'build') ? $buildDirectory : env('ELIXIR_BUILD_PATH', $buildDirectory);

        if (is_null($manifest) || $manifestPath !== $buildBase) {
            $manifest = json_decode(file_get_contents(public_path($buildBase.'/rev-manifest.json')), true);

            $manifestPath = $buildBase;
        }

        if (isset($manifest[$file])) {
            return '/'.trim($buildBase.'/'.$manifest[$file], '/');
        }

        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}
