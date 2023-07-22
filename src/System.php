<?php

namespace Rmunate\Server;

use Rmunate\Server\Traits\PhpInfo;
use Rmunate\Server\Traits\ServerInfo;
use Rmunate\Server\Traits\ConstantsInfo;
use Rmunate\Server\Traits\EnvironmentInfo;

/**
 * The System class provides a centralized interface to access information
 * about the server environment by utilizing traits that offer specific functionality.
 */
class System
{
    use ConstantsInfo;     // Include trait for retrieving PHP constants information.
    use PhpInfo;           // Include trait for retrieving PHP configuration information.
    use ServerInfo;        // Include trait for retrieving server-related information.
    use EnvironmentInfo;   // Include trait for retrieving environment-related information.
}
