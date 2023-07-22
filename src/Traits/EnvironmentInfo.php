<?php

namespace Rmunate\Server\Traits;

trait EnvironmentInfo
{
    /**
     * Determine if the given configuration value exists.
     *
     * @param  string  $key
     * @return bool
     */
    protected function hasVariable($key)
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
    protected function getVariable($key, $default = null)
    {
        return env($key, $default);
    }

    /**
     * Get all environment variables.
     *
     * @return array
     */
    public static function allVariables()
    {
        return (object) $_ENV;
    }
}
