# SYSTEM (The Super Global Wrapper!)

The System Library allows you to query all information related to existing server-side variables, values, and configurations (Server Variables, Environment Variables, PHP Values, and Configurations). It provides an easy and convenient way to work with server data.

![SYSTEM](https://github.com/rmunate/PHPInfoServer/assets/91748598/75499e3e-725b-4f27-ad10-4db285454cc1)

## Table of Contents
1. [System Class](#system-class)
2. [Available Methods](#available-methods)
   - [PHP Information](#php-information)
   - [Environment Variables](#environment-variables)
   - [PHP INI Configuration](#php-ini-configuration)
   - [Server Information](#server-information)
3. [Usage Examples](#usage-examples)
4. [Creator](#creator)
5. [License](#license)

## Installation

To install the package via Composer, execute the following command:

```shell
composer require rmunate/info-server
```

## System Class

### Available Methods
Below are the different methods provided through the current library. Use them as needed.

#### PHP Information
Constant and available values in the PHP version in use:

| Method | Description and Return |
| ------ | ---------------------- |
| `System::php_uname()` | Gets the operating system on which PHP is running. |
| `System::php_version()` | Gets the current PHP version in "major.minor.edition[extra]" notation. |
| `System::php_major_version()` | Gets the current "major version" of PHP as an integer (e.g., int(5) in version "5.2.7-extra"). |
| `System::php_minor_version()` | Gets the current "minor version" of PHP as an integer (e.g., int(2) in version "5.2.7-extra"). |
| `System::php_release_version()` | Gets the PHP release version. |
| `System::php_version_id()` | Gets the PHP version id. |
| `System::php_extra_version()` | Gets the PHP "extra" version as a string (e.g., '-extra' in version "5.2.7-extra"). Often used by distributors to indicate the package version. |
| `System::php_maxpathlen()` | Gets the maximum length of file (including directories) names supported by the PHP build. |
| `System::php_os()` | Gets the operating system for which PHP was built. |
| `System::php_os_family()` | Gets the family of operating systems for which PHP was built. Can be 'Windows', 'BSD', 'OSX', 'Solaris', 'Linux', or 'Unknown'. Available since PHP 7.2.0. |
| `System::php_int_max()` | Gets the largest integer supported in this PHP build. Normally int(2147483647) on 32-bit systems and int(9223372036854775807) on 64-bit systems. |
| `System::php_int_min()` | Gets the smallest integer supported in this PHP build. Normally int(-2147483648) on 32-bit systems and int(-9223372036854775808) on 64-bit systems. Typically, PHP_INT_MIN === ~PHP_INT_MAX. |
| `System::php_int_size()` | Gets the size of an integer in bytes in this PHP build. |
| `System::php_float_dig()` | Gets the number of decimal digits that can be rounded and reversed in a floating-point number without loss of precision. Available since PHP 7.2.0. |
| `System::php_float_epsilon()` | Gets the smallest positive floating-point number x such that x + 1.0 != 1.0. Available since PHP 7.2.0. |
| `System::php_float_min()` | Gets the smallest positive floating-point number that can be represented. To get the smallest representable negative floating-point number, use -PHP_FLOAT_MAX. Available since PHP 7.2.0. |
| `System::php_float_max()` | Gets the largest floating-point number that can be represented. Available since PHP 7.2.0. |

#### Environment Variables
Retrieve any available value in the environment variables and validate if the variable exists.

| Method | Description and Return |
| ------ | ---------------------- |
| `System::hasEnvironmentVariable($key)` | Determines if the given configuration value exists. |
| `System::getEnvironmentVariable($key, $default = null)` | Gets the environment variable with the given key. If not found, returns the default value (if provided). |
| `System::allEnvironmentVariables()` | Gets all environment variables. |

#### PHP INI Configuration
Easily and quickly check PHP INI configuration.

| Method | Description |
| ------ | ----------- |
| `System::php_ini_settings()` | Gets the complete information of PHP configuration (php.ini settings). Returns an associative array with configuration settings or null if there is an error. |
| `System::active_php_extensions()` | Gets the list of active PHP extensions. Returns an array with the names of active extensions or null if there is an error. |

#### Server Information
Finally, you have a range of methods to know server values.

| Method | Description |
| ------ | ----------- |
| `System::hasServerVariable($variable)` | Verifies if a specific server variable is defined. |
| `System::getServerVariable($variable)` | Gets the value of a specific server variable. |
| `System::allServerVariables()` | All data variable $_SERVER. |
| `System::user()` | Gets the user running the PHP script, if available. |
| `System::home()` | Gets the home directory of the user, if available. |
| `System::script_name()` | Gets the current script's path and name. Useful for self-referencing pages. |
| `System::request_uri()` | Gets the URI used to access the page. |
| `System::query_string()` | Gets the query string of the current request, if available. |
| `System::request_method()` | Gets the request method used to access the page. |
| `System::server_protocol()` | Gets the name and revision number of the information protocol through which the page was requested. |
| `System::gateway_interface()` | Gets the CGI specification revision used by the server. |
| `System::redirect_url()` | Gets the URL after the redirection, if available. |
| `System::remote_port()` | Gets the port used by the user's machine to communicate with the web server. |
| `System::script_filename()` | Gets the absolute path and name of the currently running script. |
| `System::server_admin()` | Gets the value of the `SERVER_ADMIN` directive (from Apache) in the server's configuration file. If the script is running on a virtual host, the value will be the one defined for that virtual host. |
| `System::context_document_root()` | Gets the document root of the current script without a trailing slash. |
| `System::context_prefix()` | Method without documentation for newer Apache versions. |
| `System::request_scheme()` | Gets the scheme used in the request, either "HTTP" or "HTTPS". |
| `System::document_root()` | Gets the server's root directory as defined in the server's configuration file. |
| `System::remote_addr()` | Gets the IP address from which the current user is viewing the page. |
| `System::server_port()` | Gets the server's port used for communication. By default, the value will be '80'. If SSL is used, for example, this value will change to the one defined for the secure HTTP port. |
| `System::server_addr()` | Gets the IP address of the server where the script is currently running. |
| `System::server_name()` | Gets the name of the server where the script is currently running. If the script is running on a virtual host, the value will be the one defined for that virtual host. |
| `System::server_software()` | Gets the server software identification string provided in the response headers to requests. |
| `System::server_signature()` | Gets the server signature string containing the server's version and virtual host name. It is added to pages generated by the server if this feature is enabled. |
| `System::path()` | Gets the value of the `PATH` environment variable. Returns the raw value of the 'Cookie' header sent by the user agent. |
| `System::http_cookie()` | Gets the 'Cookie' header sent by the user agent. |
| `System::http_accept_language()` | Gets the 'Accept-Language' header of the current request, if available. |
| `System::http_accept_encoding()` | Gets the 'Accept-Encoding' header of the current request, if available. |
| `System::http_sec_fetch_dest()` | Gets the 'Sec-Fetch-Dest' header of the current request, if available. |
| `System::http_sec_fetch_user()` | Gets the 'Sec-Fetch-User' header of the current request, if available. |
| `System::http_sec_fetch_mode()` | Gets the 'Sec-Fetch-Mode' header of the current request, if available. |
| `System::http_sec_fetch_site()` | Gets the 'Sec-Fetch-Site' header of the current request, if available. |
| `System::http_accept()` | Gets the 'Accept' header of the current request, if available. |
| `System::http_user_agent()` | Gets the 'User-Agent' header of the current request, if available. This is a string indicating the user agent used to access the page. Among other options, you can use this value with `get_browser()` to customize the page output based on the capabilities of the user agent. |
| `System::http_upgrade_insecure_requests()` | Gets the value of the 'Upgrade-Insecure-Requests' header of the current request, if available. |
| `System::http_sec_ch_ua_platform()` | Gets the platform of the user's connection, if available. |
| `System::http_sec_ch_ua_mobile()` | Gets the mobile connection platform, if available. |
| `System::http_host()` | Gets the 'Host' header of the current request, if available. |
| `System::request_time_float()` | Gets the timestamp of the request start with microsecond precision. Available since PHP 5.4.0. |
| `System::request_time()` | Gets the Unix timestamp of the request start. Available since PHP 5.1.0. |

### Usage Examples
```php
// Check if a server variable exists
System::hasServerVariable('REMOTE_ADDR');

// Get a value at the server level
System::hasServerVariable('getServerVariable');

// Check PHP INI configuration
System::php_ini_settings();

// Check if an environment variable $_ENV exists
System::hasEnvironmentVariable('APP_NAME');

// Get environment variables from $_ENV
System::getEnvironmentVariable('APP_NAME');

// Check the system on which PHP is running
System::php_uname();
```

## Creator
- 🇨🇴 Raúl Mauricio Uñate Castro
- Email: raulmauriciounate@gmail.com

## License
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
