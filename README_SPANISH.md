# SYSTEM (¡La emboltura super global!)

La Libreria System permite consultar toda la información referente a las variables, valores y configuraciones existentes del lado del servidor (Variables del Servidor, Variables de Entorno, Valores de PHP y sus configuraciones).
Una forma fácil y conveniente de trabajar con los datos del Servidor.

⚙️ Esta librería es compatible con versiones de Laravel 8.0 y superiores ⚙️

[![Laravel 8.0+](https://img.shields.io/badge/Laravel-8.0%2B-orange.svg)](https://laravel.com)
[![Laravel 9.0+](https://img.shields.io/badge/Laravel-9.0%2B-orange.svg)](https://laravel.com)
[![Laravel 10.0+](https://img.shields.io/badge/Laravel-10.0%2B-orange.svg)](https://laravel.com)

![logo-info-server](https://github.com/alejandrodiazpinilla/InfoServer/assets/51100789/21de2dd5-2d2c-4ce5-8d7e-c945eb113240)

📖 [**DOCUMENTACIÓN EN INGLÉS**](README.md) 📖

## Tabla de Contenido
1. [Clase System](#clase-system)
2. [Métodos Disponibles](#métodos-disponibles)
   - [Información sobre PHP](#información-sobre-php)
   - [Variables de Entorno](#variables-de-entorno)
   - [Configuración del PHP INI](#configuración-del-php-ini)
   - [Información del Servidor](#información-del-servidor)
3. [Ejemplos de Uso](#ejemplos-de-uso)
4. [Creador](#creador)
5. [Licencia](#licencia)

## Instalación

Para instalar el paquete a través de Composer, ejecuta el siguiente comando:

```shell
composer require rmunate/info-server
```

## Clase System

### Métodos Disponibles
A continuación se relacionarán los diferentes métodos que se suministran a través de la actual biblioteca. Empléalos según sea tu necesidad.

#### Información sobre PHP
Valor de constantes y valores disponibles en la versión de PHP en uso:

| Método | Descripción y Retorno  |
| ------ | ----------------------- |
| `System::php_uname()` | Obtiene el sistema operativo en el que se ejecuta PHP. |
| `System::php_version()` | Obtiene la versión actual de PHP en notación "major.minor.edition[extra]". |
| `System::php_major_version()` | Obtiene la "versión mayor" actual de PHP como un entero (por ejemplo, int(5) en la versión "5.2.7-extra"). |
| `System::php_minor_version()` | Obtiene la "versión menor" actual de PHP como un entero (por ejemplo, int(2) en la versión "5.2.7-extra"). |
| `System::php_release_version()` | Obtiene la versión de lanzamiento de PHP. |
| `System::php_version_id()` | Obtiene la identificación de versión de PHP. |
| `System::php_extra_version()` | Obtiene la versión "extra" de PHP como una cadena (por ejemplo, '-extra' en la versión "5.2.7-extra"). A menudo utilizado por distribuidores para indicar la versión del paquete. |
| `System::php_maxpathlen()` | Obtiene la longitud máxima de los nombres de archivo (incluidos los directorios) admitidos por la compilación de PHP. |
| `System::php_os()` | Obtiene el sistema operativo para el cual se construyó PHP. |
| `System::php_os_family()` | Obtiene la familia de sistemas operativos para los cuales se construyó PHP. Puede ser 'Windows', 'BSD', 'OSX', 'Solaris', 'Linux' o 'Unknown'. Disponible desde PHP 7.2.0. |
| `System::php_int_max()` | Obtiene el número entero más grande admitido en esta compilación de PHP. Normalmente int(2147483647) en sistemas de 32 bits e int(9223372036854775807) en sistemas de 64 bits. |
| `System::php_int_min()` | Obtiene el número entero más pequeño admitido en esta compilación de PHP. Normalmente int(-2147483648) en sistemas de 32 bits e int(-9223372036854775808) en sistemas de 64 bits. Por lo general, PHP_INT_MIN === ~PHP_INT_MAX. |
| `System::php_int_size()` | Obtiene el tamaño de un número entero en bytes en esta compilación de PHP. |
| `System::php_float_dig()` | Obtiene el número de dígitos decimales que se pueden redondear en un número flotante y revertirlos sin pérdida de precisión. Disponible desde PHP 7.2.0. |
| `System::php_float_epsilon()` | Obtiene el número flotante positivo más pequeño x, tal que x + 1.0 != 1.0. Disponible desde PHP 7.2.0. |
| `System::php_float_min()` | Obtiene el número flotante positivo más pequeño que se puede representar. Para obtener el número flotante negativo más pequeño representable, use -PHP_FLOAT_MAX. Disponible desde PHP 7.2.0. |
| `System::php_float_max()` | Obtiene el número flotante más grande que se puede representar. Disponible desde PHP 7.2.0. |

#### Variables de Entorno
Podremos obtener cualquier valor disponible en las variables de entorno, al igual que validar si la variable existe.

| Método | Descripción y Retorno |
| ------ | --------------------- |
| `System::hasEnvironmentVariable($key)` | Determina si existe el valor de configuración dado. |
| `System::getEnvironmentVariable($key, $default = null)` | Obtiene la variable de entorno con la clave dada. Si no se encuentra, se devuelve el valor predeterminado (si se proporciona). |
| `System::allEnvironmentVariables()` | Obtiene todas las variables de entorno. |

#### Configuración del PHP INI
Podremos consultar la configuración del PHP INI de forma fácil, entendible y rápida.

| Método | Descripción |
| ------ | ----------- |
| `System::php_ini_settings()` | Obtiene la información completa de la configuración de PHP (ajustes de php.ini). Devuelve un array asociativo con los ajustes de configuración o null si hay un error. |
| `System::active_php_extensions()` | Obtiene la lista de extensiones de PHP activas. Devuelve un array con los nombres de las extensiones activas o null si hay un error. |

#### Información del Servidor
Por último, tienes toda una gama de métodos para conocer los valores del servidor.

| Método | Descripción |
| ------ | ----------- |
| `System::hasServerVariable($variable)` | Verifica si una variable de servidor específica está definida. |
| `System::getServerVariable($variable)` | Obtiene el valor de una variable de servidor específica. |
| `System::allServerVariables()` | Toda la data disponible en la variable $_SERVER. |
| `System::user()` | Obtiene el usuario que está ejecutando el script de PHP, si está disponible. |
| `System::home()` | Obtiene el directorio de inicio del usuario, si está disponible. |
| `System::script_name()` | Obtiene la ruta y el nombre del script actual. Útil para autoreferenciar páginas. |
| `System::request_uri()` | Obtiene la URI utilizada para acceder a la página. |
| `System::query_string()` | Obtiene la cadena de consulta de la solicitud actual, si está disponible. |
| `System::request_method()` | Obtiene el método de solicitud utilizado para acceder a la página. |
| `System::server_protocol()` | Obtiene el nombre y número de revisión del protocolo de información a través del cual se solicitó la página. |
| `System::gateway_interface()` | Obtiene la revisión de especificación CGI utilizada por el servidor. |
| `System::redirect_url()` | Obtiene la URL después de la redirección, si está disponible. |
| `System::remote_port()` | Obtiene el puerto utilizado por la máquina del usuario para comunicarse con el servidor web. |
| `System::script_filename()` | Obtiene la ruta y el nombre absoluto del script que se está ejecutando actualmente. |
| `System::server_admin()` | Obtiene el valor de la directiva `SERVER_ADMIN` (de Apache) en el archivo de configuración del servidor. Si el script se ejecuta en un host virtual, el valor será el definido para ese host virtual. |
| `System::context_document_root()` | Obtiene la raíz del documento del script actual sin una barra diagonal al final. |
| `System::context_prefix()` | Método sin documentación para nuevas versiones de Apache. |
| `System::request_scheme()` | Obtiene el esquema utilizado en la solicitud, ya sea "HTTP" o "HTTPS". |
| `System::document_root()` | Obtiene el directorio raíz del servidor, tal como está definido en el archivo de configuración del servidor. |
| `System::remote_addr()` | Obtiene la dirección IP desde la cual el usuario actual está viendo la página. |
| `System::server_port()` | Obtiene el puerto del servidor utilizado para la comunicación. Por defecto, el valor será '80'. Si se usa SSL, por ejemplo, este valor se cambiará al definido para el puerto seguro de HTTP. |
| `System::server_addr()` | Obtiene la dirección IP del servidor donde se está ejecutando el script. |
| `System::server_name()` | Obtiene el nombre del servidor donde se está ejecutando el script. Si el script se ejecuta en un host virtual, el valor será el definido para ese host virtual. |
| `System::server_software()` | Obtiene la cadena de identificación de software del servidor proporcionada en las cabeceras de respuesta a las solicitudes. |
| `System::server_signature()` | Obtiene la cadena de firma del servidor que contiene la versión del servidor y el nombre del host virtual. Se agrega a las páginas generadas por el servidor si esta característica está habilitada. |
| `System::path()` | Obtiene el valor de la variable de entorno `PATH`. Retorna el valor sin formato del encabezado 'Cookie' enviado por el agente de usuario. |
| `System::http_cookie()` | Obtiene el encabezado 'Cookie' enviado por el agente de usuario. |
| `System::http_accept_language()` | Obtiene el encabezado 'Accept-Language' de la solicitud actual, si está disponible. |
| `System::http_accept_encoding()` | Obtiene el encabezado 'Accept-Encoding' de la solicitud actual, si está disponible. |
| `System::http_sec_fetch_dest()` | Obtiene el encabezado 'Sec-Fetch-Dest' de la solicitud actual, si está disponible. |
| `System::http_sec_fetch_user()` | Obtiene el encabezado 'Sec-Fetch-User' de la solicitud actual, si está disponible. |
| `System::http_sec_fetch_mode()` | Obtiene el encabezado 'Sec-Fetch-Mode' de la solicitud actual, si está disponible. |
| `System::http_sec_fetch_site()` | Obtiene el encabezado 'Sec-Fetch-Site' de la solicitud actual, si está disponible. |
| `System::http_accept()` | Obtiene el encabezado 'Accept' de la solicitud actual, si está disponible. |
| `System::http_user_agent()` | Obtiene el encabezado 'User-Agent' de la solicitud actual, si está disponible. Esta es una cadena que indica el agente de usuario utilizado para acceder a la página. Entre otras opciones, puedes utilizar este valor con `get_browser()` para personalizar la salida de la página en función de las capacidades del agente de usuario. |
| `System::http_upgrade_insecure_requests()` | Obtiene el valor del encabezado 'Upgrade-Insecure-Requests' de la solicitud actual, si está disponible. |
| `System::http_sec_ch_ua_platform()` | Obtiene la plataforma de la conexión del usuario, si está disponible. |
| `System::http_sec_ch_ua_mobile()` | Obtiene la plataforma de conexión móvil, si está disponible. |
| `System::http_host()` | Obtiene el encabezado 'Host' de la solicitud actual, si está disponible. |
| `System::request_time_float()` | Obtiene la marca de tiempo del inicio de la solicitud con precisión de microsegundos. Disponible desde PHP 5.4.0. |
| `System::request_time()` | Obtiene la marca de tiempo Unix del inicio de la solicitud. Disponible desde PHP 5.1.0. |

### Ejemplos de Uso
```php
// Validar si existe una variable a nivel de servidor
System::hasServerVariable('REMOTE_ADDR');

// Obtener un valor a nivel de servidor
System::hasServerVariable('getServerVariable');

// Conocer la configuración del php.ini
System::php_ini_settings();

// Conocer si existe una variable de entorno $_ENV
System::hasEnvironmentVariable('APP_NAME');

// Conocer y obtener variables de entorno den $_ENV
System::getEnvironmentVariable('APP_NAME');

// Conocer el sistema sobre el cual se ejecuta PHP
System::php_uname();
```

## Creador
- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
Este proyecto se encuentra bajo la [Licencia MIT](https://choosealicense.com/licenses/mit/).

🌟 ¡Apoya Mis Proyectos! 🚀

¡Realiza las contribuciones que veas necesarias, el código es totalmente tuyo. Juntos podemos hacer cosas asombrosas y mejorar el mundo del desarrollo. Tu apoyo es invaluable. ✨

Si tienes ideas, sugerencias o simplemente deseas colaborar, ¡estamos abiertos a todo! ¡Únete a nuestra comunidad y forma parte de nuestro viaje hacia el éxito! 🌐👩‍💻👨‍💻
