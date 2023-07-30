<?php

namespace Rmunate\InfoServer;

use Rmunate\InfoServer\Traits\ConstantsInfo;
use Rmunate\InfoServer\Traits\EnvironmentInfo;
use Rmunate\InfoServer\Traits\PhpInfo;
use Rmunate\InfoServer\Traits\ServerInfo;

class System
{
    use ConstantsInfo;    // Include trait for retrieving PHP constants information.
    use PhpInfo;          // Include trait for retrieving PHP configuration information.
    use ServerInfo;       // Include trait for retrieving server-related information.
    use EnvironmentInfo;  // Include trait for retrieving environment-related information.
}
