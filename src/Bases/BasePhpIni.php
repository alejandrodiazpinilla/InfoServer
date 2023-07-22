<?php

namespace Rmunate\Server\Bases;

abstract class BasePhpIni
{
    /**
     * Set a PHP configuration option using ini_set().
     *
     * @param string $option The name of the option to set.
     * @param mixed $value The value to set for the option.
     * @return bool True if the option was set successfully, false otherwise.
     */
    abstract public static function setOption(string $option, $value): bool;

    /**
     * Get the current value of a PHP configuration option.
     *
     * @param string $option The name of the option to retrieve.
     * @return mixed|null The current value of the option, or null if the option is not set or not found.
     */
    abstract public static function getOption(string $option);

    /**
     * Restore the value of a PHP configuration option to its default value.
     *
     * @param string $option The name of the option to restore.
     * @return bool True if the option was restored successfully, false otherwise.
     */
    abstract public static function restoreOption(string $option): bool;

    /**
     * Check if a PHP configuration option is set (has a non-empty value).
     *
     * @param string $option The name of the option to check.
     * @return bool True if the option is set, false otherwise.
     */
    abstract public static function isOptionSet(string $option): bool;

    /**
     * Check if a PHP configuration option exists (is defined in php.ini).
     *
     * @param string $option The name of the option to check.
     * @return bool True if the option exists, false otherwise.
     */
    abstract public static function doesOptionExist(string $option): bool;
}