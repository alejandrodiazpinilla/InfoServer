# Info Server (PHP | LARAVEL)
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)
Una simple pero muy útil libreria para obtener las variables de entorno, del servidor, de Lravel y de PHP

- Conozca desde que sistema operativo se conectan a su aplicación.
- Valide si es un acceso móvil o web.
- Obtenga los datos globales del servidor.
- Obtenga valores de la versión de PHP en uso.
- Obtenga los datos del ENV de laravel para las revisiones que requiera.

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/info-server v2.0.x-dev
```

## Metodos
Invoque el metodo que requiera.

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `Server::agent()->is_iPhone()` | Retorna TRUE si el usuario se está conectando al sistema desde un IPhone. |
| `Server::agent()->is_Macintosh()` | Retorna TRUE si el usuario se está conectando al sistema desde un MAC. |
| `Server::agent()->is_Linux()` | Retorna TRUE si el usuario se está conectando al sistema desde un Linux (PC o Sistemas Android). |
| `Server::agent()->is_Android()` | Retorna TRUE si el usuario se está conectando al sistema desde un Android. |
| `Server::agent()->is_Windows()` | Retorna TRUE si el usuario se está conectando al sistema desde un Windows. |
| `Server::agent()->is_Mobile()` | Retorna TRUE si el usuario se está conectando desde un dispositivo movil. |
| `Server::agent()->browser()` | Retorna un objeto con los datos del navegador en uso. |
| `Server::agent()->get()` | Retorna el Agente Completo de Conexión. |

![image](https://user-images.githubusercontent.com/91748598/189487993-98273c88-36fb-4c89-abe6-9d79cb0a6a40.png)

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `Server::php_uname()` | Sistema Operativo Sobre El Cual Corre PHP.|
| `Server::php_version()` | La versión actual de PHP en notación "mayor.menor.edición[extra]". |
| `Server::php_major_version()` | La versión "mayor" actual de PHP como valor integer (p.ej., int(5) en la versión "5.2.7-extra"). |
| `Server::php_minor_version()` | La versión "menor" actual de PHP como valor integer (p.ej, int(2) en la versión "5.2.7-extra"). |
| `Server::php_release_version()` | Detalle Release Versión PHP |
| `Server::php_version_id()` | ID Version de PHP |
| `Server::php_extra_version()` | La versión "extra" actual de PHP, en forma de string (p.ej., '-extra' para la versión "5.2.7-extra"). Se usa a menudo por los distribuidores para indicar la versión de un paquete. |
| `Server::php_maxpathlen()` | La longitud máxima de los nombres de ficheros (incluyendo directorios) admitida por la compilación de PHP. |
| `Server::php_os()` | El sistema operativo para el que se construyó PHP. |
| `Server::php_os_family()` | La familia de sistemas operativos para la que se construyó PHP. Puede se 'Windows', 'BSD', 'OSX', 'Solaris', 'Linux' or 'Unknown'. Disponible desde PHP 7.2.0. |
| `Server::php_int_max()` | El número entero más grande admitido en esta compilación de PHP. Normalmente int(2147483647) en sistemas de 32 bits y int(9223372036854775807) en sistemas de 64 bits. |
| `Server::php_int_min()` | El número entero más pequeño admitido en esta compilación de PHP. Normalmente int(-2147483648) en sistemas de 32 bits y int(-9223372036854775808) en sistemas de 64 bits. Usualmente, PHP_INT_MIN === ~PHP_INT_MAX. |
| `Server::php_int_size()` | El tamaño de un número entero en bytes en esta compilación de PHP. |
| `Server::php_float_dig()` | Número de dígitos decimales que se pueden redondear en un float y revertirlos si pédida de precisión. Disponible a partir de PHP 7.2.0. |
| `Server::php_float_epsilon()` | El menor número positivo representable x, tal que x + 1.0 != 1.0. Disponible a partir de PHP 7.2.0. |
| `Server::php_float_min()` | El menor número positivo de punto flotante representable. Si necesita el menor número de punto flotante negative representable, use - PHP_FLOAT_MAX. Disponible a partir de PHP 7.2.0. |
| `Server::php_float_max()` | El mayor número de punto flotante representable. Disponible a partir de PHP 7.2.0. |
| `Server::user()` | Ejemplo Return: "www-data".|
| `Server::home()` | Ejemplo Return: "/var/www". |
| `Server::script_name()` | Contiene la ruta del script actual. Esto es de utilidad para las páginas que necesiten apuntarse a si mismas. La constante __FILE__ contiene la ruta absoluta y el nombre del archivo actual incluido. |
| `Server::request_uri()` |  La URI que se empleó para acceder a la página. Por ejemplo: '/index.html'. |
| `Server::query_string()` | Si existe, la cadena de la consulta de la petición de la página. |
| `Server::request_method()` | Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'. |
| `Server::server_protocol()` | Nombre y número de revisión del protocolo de información a través del cual la página es solicitada, por ejemplo 'HTTP/1.0'. |
| `Server::gateway_interface()` | Número de revisión de la especificación CGI que está empleando el servidor, por ejemplo 'CGI/1.1'. |
| `Server::redirect_url()` | URL definitica de la petición. |
| `Server::remote_port()` | El puerto empleado por la máquina del usuario para comunicarse con el servidor web. |
| `Server::script_filename()` | La ruta del script ejecutándose actualmente en forma absoluta. |
| `Server::server_admin()` | El valor dado a la directiva SERVER_ADMIN (de Apache) en el archivo de configuración del servidor web. Si el script se está ejecutando en un host virtual, el valor dado será el definido para dicho host virtual. |
| `Server::context_document_root()` | La ruta del script ejecutándose actualmente hasta la carpeta sin ficehero. |
| `Server::context_prefix()` | Metodo sin Documentacion nueva version Apache. |
| `Server::request_scheme()` |  Retorna HTTP o HTTPS. |
| `Server::document_root()` |  El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor. |
| `Server::remote_addr()` |  La dirección IP desde la cual está viendo la página actual el usuario. |
| `Server::server_port()` |  El puerto de la máquina del servidor usado por el servidor web para la comunicación. Para las configuraciones por omisión, el valor será '80'; el empleo de SSL, por ejemplo, cambiará dicho valor al valor definido para el puerto HTTP seguro. |
| `Server::server_addr()` | La dirección IP del servidor donde se está ejecutando actualmente el script. |
| `Server::server_name()` | El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual. |
| `Server::server_software()` | Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones. |
| `Server::server_signature()` | Cadena que contiene la versión del servidor y el nombre del host virtual que son añadidas a las páginas generadas por el servidor, si esta habilitada esta funcionalidad. |
| `Server::path()` |  Retorno de directorio bin. |
| `Server::http_cookie()` |  Contiene el valor bruto del encabezado 'Cookie' enviado por el agente de usuario. |
| `Server::http_accept_language()` |  Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'. |
| `Server::http_accept_encoding()` |  Contenido de la cabecera Accept-Encoding: de la petición actual, si existe. Por ejemplo: 'gzip'. |
| `Server::http_sec_fetch_dest()` |  Por ejemplo: 'document'. |
| `Server::http_sec_fetch_user()` |  Por ejemplo: '?1'. |
| `Server::http_sec_fetch_mode()` |  Por ejemplo: 'navigate'. |
| `Server::http_sec_fetch_site()` |  Por ejemplo: 'none'. |
| `Server::http_accept()` |  Contenido de la cabecera Accept: de la petición actual, si existe. |
| `Server::http_user_agent()` | Contenido de la cabecera User-Agent: de la petición actual, si existe. Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina. Un ejemplo típico es: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Entre otras opciones, puede emplear dicho valor con get_browser() para personalizar el resultado de la salida de la página en función de las capacidades del agente de usuario empleado. |
| `Server::http_upgrade_insecure_requests()` | Solicitudes inseguras de actualización http |
| `Server::http_sec_ch_ua_platform()` | Plataforma de conexion del usuario |
| `Server::http_sec_ch_ua_mobile()` | Conexion movil a la plataforma |
| `Server::http_host()` | Contenido de la cabecera Host: de la petición actual, si existe. |
| `Server::request_time_float()` | El timestamp del inicio de la solicitud, con precisión microsegundo. Disponible desde PHP 5.4.0. |
| `Server::request_time()` | Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0. |
| `Server::all()` | Retorno de un objeto con los datos de las variables globales del servidor contemplando las variables del ENV de Laravel. |
| `Server::env()` | Retorno de un objeto con los datos de las variables en entorno de Laravel (Expone el contenido del ENV). |


```php
# ALGUNOS EJEMPLOS 

#¿El usuario se conecta desde un IPhone?
Server::agent()->is_iPhone(); #True Or False

#Se obtiene la información completa del dispositivo desde donde se conectan.
Server::agent()->get();
// {#461 ▼ 
//   +"http_user_agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36"
//   +"is_iPhone": false
//   +"is_Macintosh": true
//   +"is_Linux": false
//   +"is_Android": false
//   +"is_Windows": false
//   +"browser": {#458 ▼
//     +"name": "Google Chrome"
//     +"version": "110.0.0.0"
//     +"platform": "Macintosh"
//   }
// }130853

#Sistema Operativo Donde Corre PHP.
Server::php_uname();
// "Darwin MacBook-Pro-de-Grupo.local 22.2.0 Darwin Kernel Version 22.2.0: Fri Nov 11 02:08:47 PST 2022; root:xnu-8792.61.2~4/RELEASE_X86_64 x86_64"

```

## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)