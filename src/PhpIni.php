<?php

namespace Rmunate\Server;

use Rmunate\Server\Bases\BasePhpIni;

class PhpIni extends BasePhpIni
{
    /**
     * Set a PHP configuration option using ini_set().
     *
     * @param string $option The name of the option to set.
     * @param mixed $value The value to set for the option.
     * @return bool True if the option was set successfully, false otherwise.
     */
    public static function setOption(string $option, $value): bool
    {
        // Ensure the option is a string and not empty.
        $option = trim($option);
        if (empty($option)) {
            return false;
        }

        // Try to set the option and return the result.
        return ini_set($option, $value) !== false;
    }

    /**
     * Get the current value of a PHP configuration option.
     *
     * @param string $option The name of the option to retrieve.
     * @return mixed|null The current value of the option, or null if the option is not set or not found.
     */
    public static function getOption(string $option)
    {
        // Ensure the option is a string and not empty.
        $option = trim($option);
        if (empty($option)) {
            return null;
        }

        // Get the value of the option and return it.
        return ini_get($option);
    }

    /**
     * Restore the value of a PHP configuration option to its default value.
     *
     * @param string $option The name of the option to restore.
     * @return bool True if the option was restored successfully, false otherwise.
     */
    public static function restoreOption(string $option): bool
    {
        // Ensure the option is a string and not empty.
        $option = trim($option);
        if (empty($option)) {
            return false;
        }

        // Try to restore the option to its default value and return the result.
        return ini_restore($option);
    }

    /**
     * Check if a PHP configuration option is set (has a non-empty value).
     *
     * @param string $option The name of the option to check.
     * @return bool True if the option is set, false otherwise.
     */
    public static function isOptionSet(string $option): bool
    {
        // Ensure the option is a string and not empty.
        $option = trim($option);
        if (empty($option)) {
            return false;
        }

        // Check if the option is set and has a non-empty value.
        return ini_get($option) !== '';
    }

    /**
     * Check if a PHP configuration option exists (is defined in php.ini).
     *
     * @param string $option The name of the option to check.
     * @return bool True if the option exists, false otherwise.
     */
    public static function doesOptionExist(string $option): bool
    {
        // Ensure the option is a string and not empty.
        $option = trim($option);
        if (empty($option)) {
            return false;
        }

        // Check if the option exists in php.ini.
        return ini_get($option) !== false;
    }
}
