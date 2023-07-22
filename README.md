SERVER MANAGER (Laravel Framework) V2.X

La clase Server Manager (Laravel Framework) V2.X es una herramienta poderosa que te permitirá acceder y gestionar toda la información relevante sobre el servidor en tiempo de ejecución dentro de una aplicación Laravel. Con una interfaz sencilla y métodos eficientes, esta clase te brinda la capacidad de extraer datos cruciales del sistema, navegador y dispositivo del usuario que se conecta a tu aplicación.

Con la ayuda de la clase Server Manager (Laravel Framework) V2.X, podrás optimizar y personalizar la experiencia de usuario según las características específicas del sistema y el dispositivo, garantizando así un rendimiento excepcional y una adaptabilidad única para cada usuario que se conecte a tu aplicación Laravel.

![LOGO](https://github.com/rmunate/PHPInfoServer/assets/91748598/1c75497c-5afb-4700-a98b-4b2e77c20754)

Aquí está la tabla de contenido con enlaces a cada sección:

1. [Clase System](#clase-system)
   - Métodos Disponibles
     - [Información sobre PHP](#información-sobre-php)
     - [Variables de Entorno](#variables-de-entorno)
     - [Configuración del PHP INI](#configuración-del-php-ini)
     - [Información del Servidor](#información-del-servidor)

2. [Clase PhpRunTime](#clase-phpruntime)
   - Métodos Disponibles

3. [Clase LaravelRuntime](#clase-laravelruntime)
   - Métodos Disponibles
     - [App (Configuración de los valores del archivo app.php)](#app-configuración-de-los-valores-del-archivo-appphp)
     - [Auth (Configuración de los valores del archivo auth.php)](#auth-configuración-de-los-valores-del-archivo-authphp)
     - [Broadcasting (Configuración de los valores del archivo broadcasting.php)](#broadcasting-configuración-de-los-valores-del-archivo-broadcastingphp)
     - [Cache (Configuración de los valores del archivo cache.php)](#cache-configuración-de-los-valores-del-archivo-cachephp)
     - [Cors (Configuración de los valores del archivo cors.php)](#cors-configuración-de-los-valores-del-archivo-corsphp)
     - [Database (Configuración de los valores del archivo database.php)](#database-configuración-de-los-valores-del-archivo-databasephp)
     - [Filesystems (Configuración de los valores del archivo filesystems.php)](#filesystems-configuración-de-los-valores-del-archivo-filesystemsphp)
     - [Hashing (Configuración de los valores del archivo hashing.php)](#hashing-configuración-de-los-valores-del-archivo-hashingphp)
     - [Logging (Configuración de los valores del archivo logging.php)](#logging-configuración-de-los-valores-del-archivo-loggingphp)
     - [Mail (Configuración de los valores del archivo mail.php)](#mail-configuración-de-los-valores-del-archivo-mailphp)
     - [Queue (Configuración de los valores del archivo queue.php)](#queue-configuración-de-los-valores-del-archivo-queuephp)
     - [Sanctum (Configuración de los valores del archivo sanctum.php)](#sanctum-configuración-de-los-valores-del-archivo-sanctumphp)
     - [Services (Configuración de los valores del archivo services.php)](#services-configuración-de-los-valores-del-archivo-servicesphp)
     - [Session (Configuración de los valores del archivo session.php)](#session-configuración-de-los-valores-del-archivo-sessionphp)
     - [View (Configuración de los valores del archivo view.php)](#view-configuración-de-los-valores-del-archivo-viewphp)

4. [Clase Agent](#clase-agent)
   - Métodos Disponibles

## Clase System

La Clase System permite consultar toda la información referente a las variables, valores y configuraciones existentes del lado del servidor (Variables del Servidor, Variables de Entorno, Valores de PHP).

### Métodos Disponibles

Los siguientes métodos retornan información inmutable de PHP.

#### Información sobre PHP

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
//Validar si existe una variable a nivel de servidor
System::hasServerVariable('REMOTE_ADDR');

//Obtener Un Valor A Nivel De Servidor
System::hasServerVariable('getServerVariable');

//Conocer la configuracion del php.ini
System::php_ini_settings();

//Conocer si existe una variable de entorno $_ENV
System::hasEnvironmentVariable('APP_NAME');

//Conocer y obtener variables de entorno den $_ENV
System::getEnvironmentVariable('APP_NAME');

//Conocer el sistema sobre el cual se ejecuta PHP
System::php_uname();
```











## Clase PhpRunTime

La clase `PhpRunTime` proporciona métodos para gestionar la configuración de PHP en tiempo de ejecución. Permite establecer, obtener y restaurar opciones de configuración, así como verificar su existencia y estado.

### Métodos Disponibles

| Método | Descripción |
| - | - |
| `PhpRunTime::set($option, $value)` | Establece el valor de una opción de configuración de PHP en tiempo de ejecución utilizando `ini_set()`. |
| `PhpRunTime::get($option)` | Obtiene el valor actual de una opción de configuración de PHP. Si la opción no está configurada o no se encuentra, retorna `null`. |
| `PhpRunTime::restore($option)` | Restaura el valor de una opción de configuración de PHP a su valor predeterminado. Retorna `true` si la restauración es exitosa, o `false` en caso contrario. |
| `PhpRunTime::restoreAll()` | Restaura todas las opciones de configuración de PHP a sus valores predeterminados. Retorna `true` si todas las restauraciones son exitosas, o `false` si no. |
| `PhpRunTime::isOptionSet($option)` | Verifica si una opción de configuración está establecida y tiene un valor no vacío. Retorna `true` si la opción está configurada, o `false` si no.          |
| `PhpRunTime::doesOptionExist($option)` | Verifica si una opción de configuración existe en el archivo `php.ini`. Retorna `true` si la opción existe, o `false` si no.                                |

### Ejemplos de Uso

#### Establecer una opción de configuración

```php
use Rmunate\Server\PhpRunTime;

// Establecer la opción "display_errors" en "On"
PhpRunTime::set('display_errors', 'On');

// Verificar si la opción está configurada y tiene un valor no vacío
if (PhpRunTime::isOptionSet('display_errors')) {
    // 'La opción "display_errors" está activada.';
} else {
    // 'La opción "display_errors" no está configurada.';
}
```

#### Obtener el valor de una opción de configuración

```php
use Rmunate\Server\PhpRunTime;

// Obtener el valor actual de la opción "max_execution_time"
$maxExecutionTime = PhpRunTime::get('max_execution_time');

if ($maxExecutionTime !== null) {
    // "El valor actual de 'max_execution_time' es: $maxExecutionTime segundos.";
} else {
    // "La opción 'max_execution_time' no está configurada.";
}
```

#### Restaurar una opción de configuración

```php
use Rmunate\Server\PhpRunTime;

// Establecer temporalmente la opción "memory_limit" en "256M"
PhpRunTime::set('memory_limit', '256M');

// Restaurar la opción "memory_limit" a su valor predeterminado
PhpRunTime::restore('memory_limit');

// Verificar si la opción está configurada y tiene un valor no vacío
if (PhpRunTime::isOptionSet('memory_limit')) {
    // 'La opción "memory_limit" está configurada.';
} else {
    // 'La opción "memory_limit" no está configurada.';
}
```

#### Restaurar todas las opciones de configuración

```php
use Rmunate\Server\PhpRunTime;

// Establecer temporalmente algunas opciones de configuración
PhpRunTime::set('display_errors', 'On');
PhpRunTime::set('error_reporting', E_ALL);

// Restaurar todas las opciones a sus valores predeterminados
PhpRunTime::restoreAll();

// Verificar si las opciones están configuradas y tienen valores no vacíos
if (PhpRunTime::isOptionSet('display_errors') || PhpRunTime::isOptionSet('error_reporting')) {
    // 'Algunas opciones no pudieron ser restauradas.';
} else {
    // 'Todas las opciones fueron restauradas correctamente.';
}
```

### Aclaraciones

- Los cambios realizados con el método `set()` son válidos solo durante la ejecución del script actual y no afectan al archivo `php.ini`. Para hacer cambios permanentes, es necesario editar el archivo `php.ini` manualmente.

- Algunas opciones de configuración pueden estar deshabilitadas en entornos compartidos de alojamiento (shared hosting), lo que puede limitar la capacidad de cambiar ciertas configuraciones.

- Es importante tener cuidado al modificar la configuración de PHP, ya que algunos cambios pueden afectar el rendimiento y la seguridad de las aplicaciones. Se recomienda consultar la documentación oficial de PHP para obtener información detallada sobre cada opción de configuración.

## Clase LaravelRuntime
La clase `LaravelRuntime` te faculta para modificar los valores de configuración de Laravel en tiempo de ejecución. Es importante tener en cuenta que estos cambios no afectarán los valores en el archivo `.env`, sino que solo se aplicarán mientras ejecutas los scripts.

A continuación, te mostraremos varios ejemplos posibles para que logres identificar las amplias facilidades de uso.

### Métodos Disponibles

#### App (Configuración de los valores del archivo app.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/app.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::app()->get('APP_NAME');
LaravelRuntime::app('maintenance')->get('driver');
```

##### Cómo cambiar valores

```php
LaravelRuntime::app()->set('APP_NAME', 'CodeMaestro');
LaravelRuntime::app('maintenance')->set('driver', 'file');
```

#### Auth (Configuración de los valores del archivo auth.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/auth.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::auth('defaults')->get('guard');
LaravelRuntime::auth()->get('defaults.guard');
```

##### Cómo cambiar valores

```php
LaravelRuntime::auth('defaults')->set('guard', 'api');
LaravelRuntime::auth()->set('defaults.guard', 'api');
```

#### Broadcasting (Configuración de los valores del archivo broadcasting.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/broadcasting.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::broadcasting()->get('default');
LaravelRuntime::broadcasting('connections.pusher')->get('driver');
```

##### Cómo cambiar valores

```php
LaravelRuntime::broadcasting()->set('default', 'null');
LaravelRuntime::broadcasting('connections.pusher')->set('driver', 'pusher');
```

#### Cache (Configuración de los valores del archivo cache.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/cache.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::cache()->get('default');
LaravelRuntime::cache('stores.array.driver')->get();
```

##### Cómo cambiar valores

```php
LaravelRuntime::cache()->set('default', 'null');
LaravelRuntime::cache('stores.array')->set('driver', 'array');
```

#### Cors (Configuración de los valores del archivo cors.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/cors.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::cors()->get('supports_credentials');
```

##### Cómo cambiar valores

```php
LaravelRuntime::cors()->set('supports_credentials', false);
```

#### Database (Configuración de los valores del archivo database.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/database.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::database('connections')->get('mysql');
LaravelRuntime::database('connections.mysql')->get('database');
```

##### Cómo cambiar valores

```php
LaravelRuntime::database('connections.mysql')->set('database', 'newDB');
LaravelRuntime::database('connections.mysql')->set('username', 'newUser');
LaravelRuntime::database('connections.mysql')->set('password', 'newPass');
```

#### Filesystems (Configuración de los valores del archivo filesystems.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/filesystems.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::filesystems('disks')->get('s3');
```

##### Cómo cambiar valores

```php
LaravelRuntime::filesystems('disks.s3')->set('key', 'XXXXXXX');
LaravelRuntime::filesystems('disks.s3')->set('secret', 'XXXXXXX');
```

#### Hashing (Configuración de los valores del archivo hashing.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/hashing.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::hashing()->get('driver');
```

##### Cómo cambiar valores

```php
LaravelRuntime::hashing()->set('driver', 'bcrypt');
```

#### Logging (Configuración de los valores del archivo logging.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/logging.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::logging('channels')->get('stack');
```

##### Cómo cambiar valores

```php
LaravelRuntime::logging('channels.stack')->set('driver', 'stack');
```

#### Mail (Configuración de los valores del archivo mail.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/mail.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::mail('mailers')->get('smtp');
```

##### Cómo cambiar valores

```php
LaravelRuntime::mail('mailers.smtp')->set('username', 'email@domain.com');
LaravelRuntime::mail('mailers.smtp')->set('password', 'XXXXXXXXX');
LaravelRuntime::mail('mailers.smtp')->set('port', 587);
```

#### Queue (Configuración de los valores del archivo queue.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/queue.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::queue()->get('default');
```

##### Cómo cambiar valores

```php
LaravelRuntime::queue('connections.sync')->set('driver', 'sync');
```

#### Sanctum (Configuración de los valores del archivo sanctum.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/sanctum.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::sanctum()->get('expiration');
```

##### Cómo cambiar valores

```php
LaravelRuntime::sanctum()->set('expiration', null);
```

#### Services (Configuración de los valores del archivo services.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/services.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::services('mailgun')->get('domain');
```

##### Cómo cambiar valores

```php
LaravelRuntime::services('mailgun')->set('domain', 'XXXXXXXX');
```

#### Session (Configuración de los valores del archivo session.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config

/session.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::session()->get('lifetime');
```

##### Cómo cambiar valores

```php
LaravelRuntime::session()->set('lifetime', 60);
```

#### View (Configuración de los valores del archivo view.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/view.php` de Laravel.

##### Cómo obtener valores

```php
LaravelRuntime::view()->get('paths');
```

##### Cómo cambiar valores

```php
LaravelRuntime::view()->set('paths', [
    resource_path('views'),
]);
```

## Clase Agent
Esta clase ofrece una gran variedad de metodos que te permitirá conocer los datos del agente de conexion a la aplicacion.

### Metodos Disponibles.
| Método | Descripción |
|-|-|
| `Agent::get()` | Retorna el agente de conexión actual. |
| `Agent::detected()->isMobile()` | Valida si el agente proviene de un dispositivo . |
| `Agent::detected()->isDesktop()` | Retorna `true` si el usuario no está accediendo desde un dispositivo móvil. |
| `Agent::detected()->isIPhone()` | Retorna `true` si el agente del usuario corresponde a un iPhone. |
| `Agent::detected()->isMacintosh()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Macintosh. |
| `Agent::detected()->isLinux()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Linux (PC o sistemas Android). |
| `Agent::detected()->isWindows()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows. |
| `Agent::detected()->isWindowsPhone()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows Phone. |
| `Agent::detected()->isIpod()` | Retorna `true` si el agente del usuario corresponde a un iPod. |
| `Agent::detected()->isIpad()` | Retorna `true` si el agente del usuario corresponde a un iPad. |
| `Agent::detected()->isIMac()` | Retorna `true` si el agente del usuario corresponde a un iMac. |
| `Agent::detected()->clientOS()` | Retorna el nombre del sistema operativo del cliente actual. |
| `Agent::detected()->browser()` | Retorna información sobre el navegador utilizado por el cliente. |
| `Agent::detected()->remoteAddress()` | Retorna la IP en uso en la conexión al sistema. |
| `Agent::detected()->remotePort()` | Retorna el puerto en uso en la conexión al sistema. |

Facilmente podrás extraer datos de la conexión a tu aplicación. Podrás ofrecer diferentes experiencias dependiendo de qué sistema, navegador o dispositivo utilice el usuario al conectarse.
