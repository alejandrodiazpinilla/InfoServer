<?php

namespace Rmunate\Server;

use Rmunate\Server\Traits\PhpInfo;
use Rmunate\Server\Traits\ServerInfo;
use Rmunate\Server\Traits\ConstantsInfo;
use Rmunate\Server\Traits\EnvironmentInfo;

class Server
{
    use ConstantsInfo;
    use PhpInfo;
    use ServerInfo;
    use EnvironmentInfo;














#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║      ATRIBUTOS DEL OBJETO       ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Atributos del Objeto */
    protected $agent;
    private $query;
    /* Atributos Estaticos */
    private static $initializer;

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║      CONSTRUCTOR DE LA CLASE    ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    public function __construct(){
        /* Generar Valores de Servidor */
        $this->agent = strval($_SERVER['HTTP_USER_AGENT']);
        $this->query = (isset(Self::$initializer))? Self::$initializer : null;
    }

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║       TRATAMIENTOS AGENTE       ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Inicializar por Agente */
    public static function agent(){
        Self::$initializer = 'agent';
        return new static();
    }

    /* Retorna True si es un Iphone */
    public function is_iPhone(){
        /* Textos Identificadores */
        $identifiers = array(
            'iPhone',
            'iPhone OS'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un MAC. */
    public function is_Macintosh(){
        /* Textos Identificadores */
        $identifiers = array(
            'Macintosh',
            'Intel Mac OS'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). */
    public function is_Linux(){
        /* Textos Identificadores */
        $identifiers = array(
            'Linux'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Android. */
    public function is_Android(){
        /* Textos Identificadores */
        $identifiers = array(
            'Android'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un Windows. */
    public function is_Windows(){
        /* Textos Identificadores */
        $identifiers = array(
            'Windows'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna TRUE si el usuario se está conectando al sistema desde un dispositivo mobil. */
    public function is_Mobile(){
        /* Textos Identificadores */
        $identifiers = array(
            'Mobile'
        );
        /* Validacion de Identificadores */
        foreach ($identifiers as $identifier) {
            $check = strpos($this->agent, $identifier);
            if ($check >= 1){
                return true;
            }
        }
        return false;
    }

    /* Retorna un objeto con los datos del navegador en uso. */
    public function browser(string $data = null){

        $u_agent = $this->agent;
        $bname = 'No Identificado';
        $platform = 'No Identificado';
        $version= "No Identificado";

        # Plataforma
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'Linux';
        } else if (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'Macintosh';
        } else if (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'Windows';
        }

        # Navegador
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } else if(preg_match('/Firefox/i',$u_agent)){
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } else if(preg_match('/Chrome/i',$u_agent)){
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } else if(preg_match('/Safari/i',$u_agent)){
            $bname = 'Apple Safari';
            $ub = "Safari";
        } else if(preg_match('/Opera/i',$u_agent)){
            $bname = 'Opera';
            $ub = "Opera";
        } else if(preg_match('/Netscape/i',$u_agent)){
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        # Número de Version
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // No tenemos un número coincidente , solo continúa.
        }

        // Mirar Cuantas Versiones Tenemos
        $i = count($matches['browser']);
        if ($i != 1) {
            // Tendremos dos ya que no estamos usando 'otro' argumento todavía
            // Ver si la versión está antes o después del nombre
            if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            } else {
                $version= $matches['version'][1];
            }
        } else {
            $version= $matches['version'][0];
        }

        // Comprobar si tenemos una version.
        if ($version==null || $version==""){
            $version="?";
        }

        /* Validar si es Edge */
        if (str_contains($this->agent, 'Edg/')) {
            $bname = "Edge Browser";
        }

        if ($data == 'name') {
            $response = $bname;
        } else if($data == 'version'){
            $response = $version;
        } else if($data == 'platform'){
            $response = $platform;
        } else {
            $response = (object) [
                'name'      =>  $bname,
                'version'   =>  $version,
                'platform'  =>  $platform
            ];
        }
        return $response;
    }

    /* Obtener todos los metodos en uno solo */
    public function get(){
        return (object) [
            'http_user_agent' => $this->agent,
            'is_iPhone' => $this->is_iPhone(),
            'is_Macintosh' => $this->is_Macintosh(),
            'is_Linux' => $this->is_Linux(),
            'is_Android' => $this->is_Android(),
            'is_Windows' => $this->is_Windows(),
            'browser' => $this->browser()
        ];
    }




}

?>
