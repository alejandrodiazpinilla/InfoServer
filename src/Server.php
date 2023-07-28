<?php

namespace Rmunate\InfoServer;

use Rmunate\AgentDetection\Agent;
use Rmunate\InfoServer\Traits\ServerInfo;
use Rmunate\InfoServer\Traits\ConstantsInfo;
use Rmunate\InfoServer\Traits\EnvironmentInfo;

/**
 * Class Server
 * --------------------------------------------
 * This class extends the abstract class BaseServer and provides various methods to access server information
 * and detect user agent details using the Rmunate\AgentDetection\Agent library.
 * 
 * Usage:
 * ------
 * To use this class, make sure you have the required dependencies installed (Rmunate\AgentDetection\Agent library).
 * Then, you can create an instance of this class and call its methods to retrieve server and user agent details.
 * 
 * Example:
 * --------
 * // Create an instance of the Server class
 * $server = new Server();
 * 
 * // Call methods to access server and user agent information
 * $isMobile = $server->is_Mobile();
 * $browser = $server->browser();
 * 
 * Note:
 * -----
 * This class uses traits (ConstantsInfo, ServerInfo, EnvironmentInfo) to separate and organize specific sets of
 * methods for accessing different types of information. These traits contain reusable code and help maintain
 * clean and manageable code structure.
 */
class Server extends BaseServer
{
    /* Trait inclusion for accessing constants, server, and environment information */
    use ConstantsInfo;
    use ServerInfo;
    use EnvironmentInfo;

    /**
     * Method to check if the user agent is an iPhone.
     * 
     * @return bool True if the user agent is an iPhone; otherwise, false.
     */
    public function is_iPhone()
    {
        return Agent::detect()->isIPhone();
    }

    /**
     * Method to check if the user agent is a Macintosh.
     * 
     * @return bool True if the user agent is a Macintosh; otherwise, false.
     */
    public function is_Macintosh()
    {
        return Agent::detect()->isMacintosh();
    }

    /**
     * Method to check if the user agent is running on Linux.
     * 
     * @return bool True if the user agent is running on Linux; otherwise, false.
     */
    public function is_Linux()
    {
        return Agent::detect()->isLinux();
    }

    /**
     * Method to check if the user agent is an Android device.
     * 
     * @return bool True if the user agent is an Android device; otherwise, false.
     */
    public function is_Android()
    {
        return Agent::detect()->isAndroid();
    }

    /**
     * Method to check if the user agent is running on Windows.
     * 
     * @return bool True if the user agent is running on Windows; otherwise, false.
     */
    public function is_Windows()
    {
        return Agent::detect()->isWindows();
    }

    /**
     * Method to check if the user agent is a mobile device.
     * 
     * @return bool True if the user agent is a mobile device; otherwise, false.
     */
    public function is_Mobile()
    {
        return Agent::detect()->isMobile();
    }

    /**
     * Method to get details about the user agent's browser.
     * 
     * @return object An object containing browser information.
     */
    public function browser()
    {
        return Agent::detect()->browser();
    }

    /**
     * Method to get all the server and user agent information in one object.
     * 
     * @return object An object containing all the server and user agent information.
     */
    public function get()
    {
        return Agent::get();
    }
    
    /**
     * Method to get all the server variables as an object.
     * 
     * @return object An object containing all the server variables.
     */
    public static function all()
    {
        return self::allServerVariables();
    }

    /**
     * Method to get all the environment variables as an object.
     * 
     * @return void This method does not return a value; it simply calls the 'allEnvironmentVariables' method.
     */
    public static function env()
    {
        return self::allEnvironmentVariables();
    }
}

?>
