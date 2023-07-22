<?php

namespace App\Services;

use Dotenv\Dotenv;
use Illuminate\Support\Arr;

class EnvManager
{
    /**
     * Set an environment variable.
     *
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public static function set(string $key, $value): bool
    {
        $envPath = base_path('.env');
        $currentEnv = file_get_contents($envPath);

        // Check if the variable already exists in the .env file
        if (strpos($currentEnv, "{$key}=") !== false) {
            // Update the value of an existing variable
            $currentEnv = preg_replace("/{$key}=.*/", "{$key}={$value}", $currentEnv);
        } else {
            // Add a new variable to the .env file
            $currentEnv .= PHP_EOL . "{$key}={$value}";
        }

        // Save the updated .env content
        return file_put_contents($envPath, $currentEnv) !== false;
    }

    /**
     * Get the value of an environment variable.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get(string $key, $default = null)
    {
        return env($key, $default);
    }


    /**
     * Unset an environment variable.
     *
     * @param string $key
     * @return bool
     */
    public static function unset(string $key): bool
    {
        $envPath = base_path('.env');
        $currentEnv = file_get_contents($envPath);

        // Remove the variable from the .env file
        $currentEnv = preg_replace("/{$key}=.*/", '', $currentEnv);

        // Save the updated .env content
        return file_put_contents($envPath, $currentEnv) !== false;
    }

    /**
     * Check if an environment variable exists.
     *
     * @param string $key
     * @return bool
     */
    public static function exists(string $key): bool
    {
        return !is_null(env($key));
    }

    /**
     * Get all the current environment variables.
     *
     * @return array
     */
    public static function all(): array
    {
        return $_ENV;
    }
}
