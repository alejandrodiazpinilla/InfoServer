<?php

namespace Rmunate\InfoServer\Traits;

trait ServerInfo
{
    /**
     * Check if a specific server variable is set.
     *
     * @param string $variable The name of the server variable to check.
     * @return bool True if the server variable is set, false otherwise.
     */
    public static function hasServerVariable(string $variable): bool
    {
        // Ensure the variable is a string and not empty.
        $variable = trim($variable);
        if (empty($variable)) {
            return false;
        }

        // Check if the server variable is set.
        return isset($_SERVER[$variable]);
    }

    /**
     * Get the value of a specific server variable.
     *
     * @param string $variable The name of the server variable to retrieve.
     * @return mixed|null The value of the server variable, or null if the variable is not set.
     */
    public static function getServerVariable(string $variable)
    {
        // Ensure the variable is a string and not empty.
        $variable = trim($variable);
        if (empty($variable)) {
            return null;
        }

        // Get the value of the server variable and return it.
        return isset($_SERVER[$variable]) ? $_SERVER[$variable] : null;
    }

    /**
     * Get all the $_SERVER data.
     *
     * This function returns an object containing all the data from the $_SERVER superglobal array,
     * which holds server-related information and request details. The data is encapsulated in an
     * object for easy access and manipulation.
     *
     * @return object An object containing all the data from the $_SERVER array.
     */
    public static function allServerVariables()
    {
        return (object) $_SERVER;
    }
    
    /**
     * Get the user running the PHP script, if available.
     * Example return: "www-data".
     */
    public static function user()
    {
        return isset($_SERVER['USER']) ? $_SERVER['USER'] : null;
    }

    /**
     * Get the home directory of the user, if available.
     * Example return: "/var/www".
     */
    public static function home()
    {
        return isset($_SERVER['HOME']) ? $_SERVER['HOME'] : null;
    }

    /**
     * Get the current script's path and filename.
     * Useful for self-referencing pages.
     * The constant __FILE__ contains the absolute path and filename of the current included file.
     */
    public static function script_name()
    {
        return isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : null;
    }

    /**
     * Get the URI used to access the page.
     * For example: '/index.html'.
     */
    public static function request_uri()
    {
        return isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
    }

    /**
     * Get the query string of the current request, if available.
     */
    public static function query_string()
    {
        return isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
    }

    /**
     * Get the request method used to access the page.
     * For example: 'GET', 'HEAD', 'POST', 'PUT'.
     */
    public static function request_method()
    {
        return isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
    }

    /**
     * Get the name and revision number of the information protocol through which the page is requested.
     * For example: 'HTTP/1.0'.
     */
    public static function server_protocol()
    {
        return isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : null;
    }

    /**
     * Get the CGI specification revision number used by the server.
     * For example: 'CGI/1.1'.
     */
    public static function gateway_interface()
    {
        return isset($_SERVER['GATEWAY_INTERFACE']) ? $_SERVER['GATEWAY_INTERFACE'] : null;
    }

    /**
     * Get the URL after redirection, if available.
     */
    public static function redirect_url()
    {
        return isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : null;
    }

    /**
     * Get the port used by the user's machine to communicate with the web server.
     */
    public static function remote_port()
    {
        return isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : null;
    }

    /**
     * Get the absolute path and filename of the currently executing script.
     */
    public static function script_filename()
    {
        return isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : null;
    }

    /**
     * Get the value of the SERVER_ADMIN directive (from Apache) in the server's configuration file.
     * If the script is running on a virtual host, the value will be the one defined for that virtual host.
     */
    public static function server_admin()
    {
        return isset($_SERVER['SERVER_ADMIN']) ? $_SERVER['SERVER_ADMIN'] : null;
    }

    /**
     * Get the current script's document root without a trailing slash.
     */
    public static function context_document_root()
    {
        return isset($_SERVER['CONTEXT_DOCUMENT_ROOT']) ? $_SERVER['CONTEXT_DOCUMENT_ROOT'] : null;
    }

    /**
     * Method without documentation for new Apache versions.
     */
    public static function context_prefix()
    {
        return isset($_SERVER['CONTEXT_PREFIX']) ? $_SERVER['CONTEXT_PREFIX'] : null;
    }

    /**
     * Get the scheme used in the request, either "HTTP" or "HTTPS".
     */
    public static function request_scheme()
    {
        return isset($_SERVER['REQUEST_SCHEME']) ? strtoupper($_SERVER['REQUEST_SCHEME']) : null;
    }

    /**
     * Get the server's document root directory, as defined in the server's configuration file.
     */
    public static function document_root()
    {
        return isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : null;
    }

    /**
     * Get the IP address from which the current user is viewing the page.
     */
    public static function remote_addr()
    {
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }

    /**
     * Get the server port used by the web server for communication.
     * For default configurations, the value will be '80'.
     * The use of SSL, for example, will change this value to the one defined for the secure HTTP port.
     */
    public static function server_port()
    {
        return isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : null;
    }

    /**
     * Get the IP address of the server where the script is currently running.
     */
    public static function server_addr()
    {
        return isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : null;
    }

    /**
     * Get the server name where the script is currently running.
     * If the script is running on a virtual host, the value will be the one defined for that virtual host.
     */
    public static function server_name()
    {
        return isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : null;
    }

    /**
     * Get the server's software identification string given in response headers to requests.
     */
    public static function server_software()
    {
        return isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : null;
    }

    /**
     * Get the server's signature string containing the server's version and virtual host name.
     * This is added to pages generated by the server if this feature is enabled.
     */
    public static function server_signature()
    {
        return isset($_SERVER['SERVER_SIGNATURE']) ? $_SERVER['SERVER_SIGNATURE'] : null;
    }

    /**
     * Get the PATH environment variable value.
     * Returns the raw value of the 'Cookie' header sent by the user agent.
     */
    public static function path()
    {
        return isset($_SERVER['PATH']) ? $_SERVER['PATH'] : null;
    }

    /**
     * Get the 'Cookie' header sent by the user agent.
     */
    public static function http_cookie()
    {
        return isset($_SERVER['HTTP_COOKIE']) ? $_SERVER['HTTP_COOKIE'] : null;
    }

    /**
     * Get the 'Accept-Language' header of the current request, if available.
     * For example: 'en'.
     */
    public static function http_accept_language()
    {
        return isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null;
    }

    /**
     * Get the 'Accept-Encoding' header of the current request, if available.
     * For example: 'gzip'.
     */
    public static function http_accept_encoding()
    {
        return isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : null;
    }

    /**
     * Get the 'Sec-Fetch-Dest' header of the current request, if available.
     * For example: 'document'.
     */
    public static function http_sec_fetch_dest()
    {
        return isset($_SERVER['HTTP_SEC_FETCH_DEST']) ? $_SERVER['HTTP_SEC_FETCH_DEST'] : null;
    }

    /**
     * Get the 'Sec-Fetch-User' header of the current request, if available.
     * For example: '?1'.
     */
    public static function http_sec_fetch_user()
    {
        return isset($_SERVER['HTTP_SEC_FETCH_USER']) ? $_SERVER['HTTP_SEC_FETCH_USER'] : null;
    }

    /**
     * Get the 'Sec-Fetch-Mode' header of the current request, if available.
     * For example: 'navigate'.
     */
    public static function http_sec_fetch_mode()
    {
        return isset($_SERVER['HTTP_SEC_FETCH_MODE']) ? $_SERVER['HTTP_SEC_FETCH_MODE'] : null;
    }

    /**
     * Get the 'Sec-Fetch-Site' header of the current request, if available.
     * For example: 'none'.
     */
    public static function http_sec_fetch_site()
    {
        return isset($_SERVER['HTTP_SEC_FETCH_SITE']) ? $_SERVER['HTTP_SEC_FETCH_SITE'] : null;
    }

    /**
     * Get the 'Accept' header of the current request, if available.
     */
    public static function http_accept()
    {
        return isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null;
    }

    /**
     * Get the 'User-Agent' header of the current request, if available.
     * This is a string indicating the user agent used to access the page.
     * For example: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586).
     * Among other options, you can use this value with get_browser() to customize the page output based on the user agent's capabilities.
     */
    public static function http_user_agent()
    {
        return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
    }

    /**
     * Get the value of the 'Upgrade-Insecure-Requests' header of the current request, if available.
     */
    public static function http_upgrade_insecure_requests()
    {
        return isset($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']) ? $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] : null;
    }

    /**
     * Get the platform of the user's connection, if available.
     */
    public static function http_sec_ch_ua_platform()
    {
        return isset($_SERVER['HTTP_SEC_CH_UA_PLATFORM']) ? filter_var(filter_var($_SERVER['HTTP_SEC_CH_UA_PLATFORM'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_URL) : null;
    }

    /**
     * Get the mobile connection platform, if available.
     */
    public static function http_sec_ch_ua_mobile()
    {
        return isset($_SERVER['HTTP_SEC_CH_UA_MOBILE']) ? str_replace('?', '', $_SERVER['HTTP_SEC_CH_UA_MOBILE']) : null;
    }

    /**
     * Get the 'Host' header of the current request, if available.
     */
    public static function http_host()
    {
        return isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;
    }

    /**
     * Get the timestamp of the start of the request with microsecond precision.
     * Available since PHP 5.4.0.
     */
    public static function request_time_float()
    {
        return isset($_SERVER['REQUEST_TIME_FLOAT']) ? $_SERVER['REQUEST_TIME_FLOAT'] : null;
    }

    /**
     * Get the Unix timestamp of the start of the request.
     * Available since PHP 5.1.0.
     */
    public static function request_time()
    {
        return isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : null;
    }
}
