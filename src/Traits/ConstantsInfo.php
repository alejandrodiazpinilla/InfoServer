<?php

namespace Rmunate\InfoServer\Traits;

trait ConstantsInfo
{
    /**
     * Get the operating system on which PHP is running.
     */
    public static function php_uname()
    {
        return php_uname();
    }

    /**
     * Get the current version of PHP in "major.minor.edition[extra]" notation.
     */
    public static function php_version()
    {
        return PHP_VERSION;
    }

    /**
     * Get the current "major" version of PHP as an integer (e.g., int(5) in version "5.2.7-extra").
     */
    public static function php_major_version()
    {
        return PHP_MAJOR_VERSION;
    }

    /**
     * Get the current "minor" version of PHP as an integer (e.g., int(2) in version "5.2.7-extra").
     */
    public static function php_minor_version()
    {
        return PHP_MINOR_VERSION;
    }

    /**
     * Get the release version of PHP.
     */
    public static function php_release_version()
    {
        return PHP_RELEASE_VERSION;
    }

    /**
     * Get the ID version of PHP.
     */
    public static function php_version_id()
    {
        return PHP_VERSION_ID;
    }

    /**
     * Get the "extra" version of PHP as a string (e.g., '-extra' for version "5.2.7-extra").
     * Often used by distributors to indicate the package version.
     */
    public static function php_extra_version()
    {
        return PHP_EXTRA_VERSION;
    }

    /**
     * Get the maximum length of file (including directories) names supported by the PHP build.
     */
    public static function php_maxpathlen()
    {
        return PHP_MAXPATHLEN;
    }

    /**
     * Get the operating system for which PHP was built.
     */
    public static function php_os()
    {
        return PHP_OS;
    }

    /**
     * Get the family of operating systems for which PHP was built.
     * Can be 'Windows', 'BSD', 'OSX', 'Solaris', 'Linux', or 'Unknown'.
     * Available since PHP 7.2.0.
     */
    public static function php_os_family()
    {
        return PHP_OS_FAMILY;
    }

    /**
     * Get the largest integer supported in this PHP build.
     * Typically int(2147483647) on 32-bit systems and int(9223372036854775807) on 64-bit systems.
     */
    public static function php_int_max()
    {
        return PHP_INT_MAX;
    }

    /**
     * Get the smallest integer supported in this PHP build.
     * Typically int(-2147483648) on 32-bit systems and int(-9223372036854775808) on 64-bit systems.
     * Usually, PHP_INT_MIN === ~PHP_INT_MAX.
     */
    public static function php_int_min()
    {
        return PHP_INT_MIN;
    }

    /**
     * Get the size of an integer in bytes in this PHP build.
     */
    public static function php_int_size()
    {
        return PHP_INT_SIZE;
    }

    /**
     * Get the number of decimal digits that can be rounded in a float and reverse them without loss of precision.
     * Available since PHP 7.2.0.
     */
    public static function php_float_dig()
    {
        return PHP_FLOAT_DIG;
    }

    /**
     * Get the smallest positive floating-point number x, such that x + 1.0 != 1.0.
     * Available since PHP 7.2.0.
     */
    public static function php_float_epsilon()
    {
        return PHP_FLOAT_EPSILON;
    }

    /**
     * Get the smallest positive representable floating-point number.
     * To get the smallest representable negative floating-point number, use -PHP_FLOAT_MAX.
     * Available since PHP 7.2.0.
     */
    public static function php_float_min()
    {
        return PHP_FLOAT_MIN;
    }

    /**
     * Get the largest representable floating-point number.
     * Available since PHP 7.2.0.
     */
    public static function php_float_max()
    {
        return PHP_FLOAT_MAX;
    }
}
