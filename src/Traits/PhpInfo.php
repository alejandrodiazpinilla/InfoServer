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
        $settings = ini_get_all();
        $filteredSettings = [];
    
        foreach ($settings as $name => $value) {

            // Filtrar las configuraciones con valores "ocultos" o sensibles
            if (strpos($name, 'password') === false && strpos($name, 'secret') === false) {
                $filteredSettings[$name] = $value['global_value'];
            }
            
        }
    
        return empty($filteredSettings) ? null : $filteredSettings;
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
