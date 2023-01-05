<?php

namespace Rmunate\InfoServer;
/**
 * Clase para Acceder a los datos del Servidor
 * --------------------------------------------
 * Desarrollado por: Raul Mauricio Uñate Castro
 * raulmauriciounate@gmail.com
 */

class Server {

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

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║          CONSTANTES PHP         ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Sistema Operativo Sobre El Cual Corre PHP. */
    public static function php_uname(){
        return php_uname();
    }

    /* La versión actual de PHP en notación "mayor.menor.edición[extra]". */
    public static function php_version(){
        return PHP_VERSION;
    }

    /* La versión "mayor" actual de PHP como valor integer (p.ej., int(5) en la versión "5.2.7-extra"). */
    public static function php_major_version(){
        return PHP_MAJOR_VERSION;
    }

    /* La versión "menor" actual de PHP como valor integer (p.ej, int(2) en la versión "5.2.7-extra"). */
    public static function php_minor_version(){
        return PHP_MINOR_VERSION;
    }

    /* Release de PHP */
    public static function php_release_version(){
        return PHP_RELEASE_VERSION;
    }

    /* ID Version de PHP */
    public static function php_version_id(){
        return PHP_VERSION_ID;
    }

    /* La versión "extra" actual de PHP, en forma de string (p.ej., '-extra' para la versión "5.2.7-extra"). Se usa a menudo por los distribuidores para indicar la versión de un paquete. */
    public static function php_extra_version(){
        return PHP_EXTRA_VERSION;
    }

    /* La longitud máxima de los nombres de ficheros (incluyendo directorios) admitida por la compilación de PHP.. */
    public static function php_maxpathlen(){
        return PHP_MAXPATHLEN;
    }

    /* El sistema operativo para el que se construyó PHP. */
    public static function php_os(){
        return PHP_OS;
    }

    /* La familia de sistemas operativos para la que se construyó PHP. Puede se 'Windows', 'BSD', 'OSX', 'Solaris', 'Linux' or 'Unknown'. Disponible desde PHP 7.2.0. */
    public static function php_os_family(){
        return PHP_OS_FAMILY;
    }

    /* El número entero más grande admitido en esta compilación de PHP. Normalmente int(2147483647) en sistemas de 32 bits y int(9223372036854775807) en sistemas de 64 bits. */
    public static function php_int_max(){
        return PHP_INT_MAX;
    }

    /* El número entero más pequeño admitido en esta compilación de PHP. Normalmente int(-2147483648) en sistemas de 32 bits y int(-9223372036854775808) en sistemas de 64 bits. Usualmente, PHP_INT_MIN === ~PHP_INT_MAX. */
    public static function php_int_min(){
        return PHP_INT_MIN;
    }

    /* El tamaño de un número entero en bytes en esta compilación de PHP. */
    public static function php_int_size(){
        return PHP_INT_SIZE;
    }

    /* Número de dígitos decimales que se pueden redondear en un float y revertirlos si pédida de precisión. Disponible a partir de PHP 7.2.0. */
    public static function php_float_dig(){
        return PHP_FLOAT_DIG;
    }

    /* El menor número positivo representable x, tal que x + 1.0 != 1.0. Disponible a partir de PHP 7.2.0. */
    public static function php_float_epsilon(){
        return PHP_FLOAT_EPSILON;
    }

    /* El menor número positivo de punto flotante representable. Si necesita el menor número de punto flotante negative representable, use - PHP_FLOAT_MAX. Disponible a partir de PHP 7.2.0. */
    public static function php_float_min(){
        return PHP_FLOAT_MIN;
    }

    /* El mayor número de punto flotante representable. Disponible a partir de PHP 7.2.0. */
    public static function php_float_max(){
        return PHP_FLOAT_MAX;
    }

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║       DATOS DEL SERVIDOR        ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Ejemplo Return: "www-data". */
    public static function user(){
        if (isset($_SERVER['USER'])) {
            $response = $_SERVER['USER'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Ejemplo Return: "/var/www". */
    public static function home(){
        if (isset($_SERVER['HOME'])) {
            $response = $_SERVER['HOME'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas. La constante __FILE__ contiene la ruta absoluta y el nombre del archivo actual incluido. */
    public static function script_name(){
        if (isset($_SERVER['SCRIPT_NAME'])) {
            $response = $_SERVER['SCRIPT_NAME'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* La URI que se empleó para acceder a la página. Por ejemplo: '/index.html'. */
    public static function request_uri(){
        if (isset($_SERVER['REQUEST_URI'])) {
            $response = $_SERVER['REQUEST_URI'];
        } else {
            $response = NULL;
        }
        return $response;

    }

    /* Si existe, la cadena de la consulta de la petición de la página. */
    public static function query_string(){
        if (isset($_SERVER['QUERY_String'])) {
            $response = $_SERVER['QUERY_String'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'. */
    public static function request_method(){
        if (isset($_SERVER['REQUEST_METHOD'])) {
            $response = $_SERVER['REQUEST_METHOD'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Nombre y número de revisión del protocolo de información a través del cual la página es solicitada, por ejemplo 'HTTP/1.0'. */
    public static function server_protocol(){
        if (isset($_SERVER['SERVER_PROTOCOL'])) {
            $response = $_SERVER['SERVER_PROTOCOL'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Número de revisión de la especificación CGI que está empleando el servidor, por ejemplo 'CGI/1.1'. */
    public static function gateway_interface(){
        if (isset($_SERVER['GATEWAY_INTERFACE'])) {
            $response = $_SERVER['GATEWAY_INTERFACE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* URL definitica de la petición. */
    public static function redirect_url(){
        if (isset($_SERVER['REDIRECT_URL'])) {
            $response = $_SERVER['REDIRECT_URL'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El puerto empleado por la máquina del usuario para comunicarse con el servidor web. */
    public static function remote_port(){
        if (isset($_SERVER['REMOTE_PORT'])) {
            $response = $_SERVER['REMOTE_PORT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* La ruta del script ejecutándose actualmente en forma absoluta. */
    public static function script_filename(){
        if (isset($_SERVER['SCRIPT_FILENAME'])) {
            $response = $_SERVER['SCRIPT_FILENAME'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El valor dado a la directiva SERVER_ADMIN (de Apache) en el archivo de configuración del servidor web. Si el script se está ejecutando en un host virtual, el valor dado será el definido para dicho host virtual. */
    public static function server_admin(){
        if (isset($_SERVER['SERVER_ADMIN'])) {
            $response = $_SERVER['SERVER_ADMIN'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* La ruta del script ejecutándose actualmente hasta la carpeta sin ficehero. */
    public static function context_document_root(){
        if (isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
            $response = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Metodo sin Documentacion nueva version Apache. */
    public static function context_prefix(){
        if (isset($_SERVER['CONTEXT_PREFIX'])) {
            $response = $_SERVER['CONTEXT_PREFIX'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Retorna HTTP o HTTPS. */
    public static function request_scheme(){
        if (isset($_SERVER['REQUEST_SCHEME'])) {
            $response = strtoupper($_SERVER['REQUEST_SCHEME']);
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor. */
    public static function document_root(){
        if (isset($_SERVER['DOCUMENT_ROOT'])) {
            $response = $_SERVER['DOCUMENT_ROOT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* La dirección IP desde la cual está viendo la página actual el usuario. */
    public static function remote_addr(){
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $response = $_SERVER['REMOTE_ADDR'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El puerto de la máquina del servidor usado por el servidor web para la comunicación. Para las configuraciones por omisión, el valor será '80'; el empleo de SSL, por ejemplo, cambiará dicho valor al valor definido para el puerto HTTP seguro. */
    public static function server_port(){
        if (isset($_SERVER['SERVER_PORT'])) {
            $response = $_SERVER['SERVER_PORT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* La dirección IP del servidor donde se está ejecutando actualmente el script. */
    public static function server_addr(){
        if (isset($_SERVER['SERVER_ADDR'])) {
            $response = $_SERVER['SERVER_ADDR'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual. */
    public static function server_name(){
        if (isset($_SERVER['SERVER_NAME'])) {
            $response = $_SERVER['SERVER_NAME'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones. */
    public static function server_software(){
        if (isset($_SERVER['SERVER_SOFTWARE'])) {
            $response = $_SERVER['SERVER_SOFTWARE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Cadena que contiene la versión del servidor y el nombre del host virtual que son añadidas a las páginas generadas por el servidor, si esta habilitada esta funcionalidad. */
    public static function server_signature(){
        if (isset($_SERVER['SERVER_SIGNATURE'])) {
            $response = $_SERVER['SERVER_SIGNATURE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Retorno de directorio bin */
    public static function path(){
        if (isset($_SERVER['PATH'])) {
            $response = $_SERVER['PATH'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contiene el valor bruto del encabezado 'Cookie' enviado por el agente de usuario. */
    public static function http_cookie(){
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $response = $_SERVER['HTTP_COOKIE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'. */
    public static function http_accept_language(){
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $response = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contenido de la cabecera Accept-Encoding: de la petición actual, si existe. Por ejemplo: 'gzip'. */
    public static function http_accept_encoding(){
        if (isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
            $response = $_SERVER['HTTP_ACCEPT_ENCODING'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Por ejemplo: 'document'. */
    public static function http_sec_fetch_dest(){
        if (isset($_SERVER['HTTP_SEC_FETCH_DEST'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_DEST'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Por ejemplo: '?1'. */
    public static function http_sec_fetch_user(){
        if (isset($_SERVER['HTTP_SEC_FETCH_USER'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_USER'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Por ejemplo: 'navigate'. */
    public static function http_sec_fetch_mode(){
        if (isset($_SERVER['HTTP_SEC_FETCH_MODE'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_MODE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Por ejemplo: 'none'. */
    public static function http_sec_fetch_site(){
        if (isset($_SERVER['HTTP_SEC_FETCH_SITE'])) {
            $response = $_SERVER['HTTP_SEC_FETCH_SITE'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contenido de la cabecera Accept: de la petición actual, si existe. */
    public static function http_accept(){
        if (isset($_SERVER['HTTP_ACCEPT'])) {
            $response = $_SERVER['HTTP_ACCEPT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contenido de la cabecera User-Agent: de la petición actual, si existe. Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina. Un ejemplo típico es: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Entre otras opciones, puede emplear dicho valor con get_browser() para personalizar el resultado de la salida de la página en función de las capacidades del agente de usuario empleado. */
    public static function http_user_agent(){
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $response = $_SERVER['HTTP_USER_AGENT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Solicitudes inseguras de actualización http */
    public static function http_upgrade_insecure_requests(){
        if (isset($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'])) {
            $response = $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Plataforma de conexion del usuario */
    public static function http_sec_ch_ua_platform(){
        if (isset($_SERVER['HTTP_SEC_CH_UA_PLATFORM'])) {
            $preResponse = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
            $preResponse = filter_var($preResponse, FILTER_SANITIZE_String);
            $preResponse = filter_var($preResponse, FILTER_SANITIZE_URL);
            $response = $preResponse;
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Conexion movil a la plataforma */
    public static function http_sec_ch_ua_mobile(){
        if (isset($_SERVER['HTTP_SEC_CH_UA_MOBILE'])) {
            $response = str_replace('?', '' , $_SERVER['HTTP_SEC_CH_UA_MOBILE']);
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Contenido de la cabecera Host: de la petición actual, si existe. */
    public static function http_host(){
        if (isset($_SERVER['HTTP_HOST'])) {
            $response = $_SERVER['HTTP_HOST'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* El timestamp del inicio de la solicitud, con precisión microsegundo. Disponible desde PHP 5.4.0. */
    public static function request_time_float(){
        if (isset($_SERVER['REQUEST_TIME_FLOAT'])) {
            $response = $_SERVER['REQUEST_TIME_FLOAT'];
        } else {
            $response = NULL;
        }
        return $response;
    }

    /* Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0. */
    public static function request_time(){
        if (isset($_SERVER['REQUEST_TIME'])) {
            $response = $_SERVER['REQUEST_TIME'];
        } else {
            $response = NULL;
        }
        return $response;
    }

#--------------------------╔═════════════════════════════════╗--------------------------#
#--------------------------║       DATOS COMO OBJETOS        ║--------------------------#
#--------------------------╚═════════════════════════════════╝--------------------------#

    /* Retorno de un objeto con todos los datos de las variables globales del servidor. */
    public static function all(){
        $response = (object) $_SERVER;
        return $response;
    }


    /* Retorno de un objeto con los datos de las variables en entorno de Laravel (Expone el contenido del ENV). */
    public static function env(){
        $response = (object) $_ENV;
        return $response;
    }

}

?>
