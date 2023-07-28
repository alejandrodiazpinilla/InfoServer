<?php

namespace Rmunate\InfoServer;

use Rmunate\InfoServer\Traits\ConstantsInfo;
use Rmunate\InfoServer\Traits\EnvironmentInfo;
use Rmunate\InfoServer\Traits\PhpInfo;
use Rmunate\InfoServer\Traits\ServerInfo;

/**
 * Class System
 * --------------------------------------------
 * The System class provides a centralized interface to access information about the server environment
 * by utilizing traits that offer specific functionality.
 *
 * Traits Used:
 * ------------
 * - ConstantsInfo: Provides methods to access PHP constants information.
 * - PhpInfo: Provides methods to access PHP configuration information.
 * - ServerInfo: Provides methods to access server-related information.
 * - EnvironmentInfo: Provides methods to access environment-related information.
 *
 * Usage:
 * ------
 * To use this class, you can simply create an instance of the System class and call its methods to retrieve
 * server environment information and PHP configuration details.
 *
 * Example:
 * --------
 * // Create an instance of the System class
 * $system = new System();
 *
 * // Access server-related information
 * $serverName = $system->getServerName();
 *
 * // Access PHP configuration details
 * $maxExecutionTime = $system->getMaxExecutionTime();
 *
 * Note:
 * -----
 * This class effectively combines various traits to provide a centralized interface for accessing different types
 * of server-related and environment-related information. Traits allow code reusability and help keep the class
 * organized and focused on specific functionality.
 */
class System
{
    use ConstantsInfo;    // Include trait for retrieving PHP constants information.
    use PhpInfo;          // Include trait for retrieving PHP configuration information.
    use ServerInfo;       // Include trait for retrieving server-related information.
    use EnvironmentInfo;  // Include trait for retrieving environment-related information.
}
