<?php

namespace Rmunate\InfoServer\Traits;

trait PhpInfo
{
    /**
     * Get the full PHP configuration information (php.ini settings).
     *
     * @return array|null An associative array with the configuration settings or null if there was an error.
     */
    public static function php_ini_settings()
    {
        ob_start();
        phpinfo(INFO_ALL);
        $phpinfo = ob_get_clean();

        $settings = [];
        if (preg_match_all('/<tr><td[^>]+>([^<]+)<\/td><td[^>]+>([^<]+)<\/td><\/tr>/', $phpinfo, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $settings[$match[1]] = $match[2];
            }
        }

        return empty($settings) ? null : $settings;
    }

    /**
     * Get the list of active PHP extensions.
     *
     * @return array|null An array with the names of the active extensions or null if there was an error.
     */
    public static function active_php_extensions()
    {
        $extensions = get_loaded_extensions();

        return empty($extensions) ? null : $extensions;
    }
}
