<?php

namespace Rmunate\InfoServer\Traits;

trait EnvironmentInfo
{
    /**
     * Determine if the given configuration value exists.
     *
     * @param  string  $key
     * @return bool
     */
    public static function hasEnvironmentVariable($key)
    {
        return !is_null(env($key));
    }

    /**
     * Get the environment variable with the given key.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function getEnvironmentVariable($key, $default = null)
    {
        return env($key, $default);
    }

    /**
     * Get all environment variables.
     *
     * @return array
     */
    public static function allEnvironmentVariables()
    {
        return (object) $_ENV;
    }
}
