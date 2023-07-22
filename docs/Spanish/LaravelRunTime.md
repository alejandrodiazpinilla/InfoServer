# LaravelRuntime: ¡Configura Laravel sobre la marcha!
La Libreria `LaravelRuntime` te faculta para modificar los valores de configuración de Laravel en tiempo de ejecución. Es importante tener en cuenta que estos cambios no afectarán los valores en el archivo `.env`, sino que solo se aplicarán mientras ejecutas los scripts.

![RUNTIME_LARAVEL](https://github.com/rmunate/PHPInfoServer/assets/91748598/b3f78d8b-9f01-4c81-8d08-a0f86791c4f9)


A continuación, te mostraremos varios ejemplos posibles para que logres identificar las amplias facilidades de uso.

## Tabla de Contenido
1. [Métodos Disponibles](#métodos-disponibles)
   - [App](#app-configuración-de-los-valores-del-archivo-appphp)
   - [Auth](#auth-configuración-de-los-valores-del-archivo-authphp)
   - [Broadcasting](#broadcasting-configuración-de-los-valores-del-archivo-broadcastingphp)
   - [Cache](#cache-configuración-de-los-valores-del-archivo-cachephp)
   - [Cors](#cors-configuración-de-los-valores-del-archivo-corsphp)
   - [Database](#database-configuración-de-los-valores-del-archivo-databasephp)
   - [Filesystems](#filesystems-configuración-de-los-valores-del-archivo-filesystemsphp)
   - [Hashing](#hashing-configuración-de-los-valores-del-archivo-hashingphp)
   - [Logging](#logging-configuración-de-los-valores-del-archivo-loggingphp)
   - [Mail](#mail-configuración-de-los-valores-del-archivo-mailphp)
   - [Queue](#queue-configuración-de-los-valores-del-archivo-queuephp)
   - [Sanctum](#sanctum-configuración-de-los-valores-del-archivo-sanctumphp)
   - [Services](#services-configuración-de-los-valores-del-archivo-servicesphp)
   - [Session](#session-configuración-de-los-valores-del-archivo-sessionphp)
   - [View](#view-configuración-de-los-valores-del-archivo-viewphp)
2. [Creador](#creador)
3. [Licencia](#licencia)


## Métodos Disponibles

A continuación te mostraremos los posibles usos de la biblioteca, es muy fácil y demasiado flexible, para que domines la configuración de Laravel con facilidad.

### App (Configuración de los valores del archivo app.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/app.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::app()->get('APP_NAME');
LaravelRuntime::app('maintenance')->get('driver');
```

- Cómo cambiar valores

```php
LaravelRuntime::app()->set('APP_NAME', 'CodeMaestro');
LaravelRuntime::app('maintenance')->set('driver', 'file');
```

### Auth (Configuración de los valores del archivo auth.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/auth.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::auth('defaults')->get('guard');
LaravelRuntime::auth()->get('defaults.guard');
```

- Cómo cambiar valores

```php
LaravelRuntime::auth('defaults')->set('guard', 'api');
LaravelRuntime::auth()->set('defaults.guard', 'api');
```

### Broadcasting (Configuración de los valores del archivo broadcasting.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/broadcasting.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::broadcasting()->get('default');
LaravelRuntime::broadcasting('connections.pusher')->get('driver');
```

- Cómo cambiar valores

```php
LaravelRuntime::broadcasting()->set('default', 'null');
LaravelRuntime::broadcasting('connections.pusher')->set('driver', 'pusher');
```

### Cache (Configuración de los valores del archivo cache.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/cache.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::cache()->get('default');
LaravelRuntime::cache('stores.array.driver')->get();
```

- Cómo cambiar valores

```php
LaravelRuntime::cache()->set('default', 'null');
LaravelRuntime::cache('stores.array')->set('driver', 'array');
```

### Cors (Configuración de los valores del archivo cors.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/cors.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::cors()->get('supports_credentials');
```

- Cómo cambiar valores

```php
LaravelRuntime::cors()->set('supports_credentials', false);
```

### Database (Configuración de los valores del archivo database.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/database.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::database('connections')->get('mysql');
LaravelRuntime::database('connections.mysql')->get('database');
```

- Cómo cambiar valores

```php
LaravelRuntime::database('connections.mysql')->set('database', 'newDB');
LaravelRuntime::database('connections.mysql')->set('username', 'newUser');
LaravelRuntime::database('connections.mysql')->set('password', 'newPass');
```

### Filesystems (Configuración de los valores del archivo filesystems.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/filesystems.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::filesystems('disks')->get('s3');
```

- Cómo cambiar valores

```php
LaravelRuntime::filesystems('disks.s3')->set('key', 'XXXXXXX');
LaravelRuntime::filesystems('disks.s3')->set('secret', 'XXXXXXX');
```

### Hashing (Configuración de los valores del archivo hashing.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/hashing.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::hashing()->get('driver');
```

- Cómo cambiar valores

```php
LaravelRuntime::hashing()->set('driver', 'bcrypt');
```

### Logging (Configuración de los valores del archivo logging.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/logging.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::logging('channels')->get('stack');
```

- Cómo cambiar valores

```php
LaravelRuntime::logging('channels.stack')->set('driver', 'stack');
```

### Mail (Configuración de los valores del archivo mail.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/mail.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::mail('mailers

')->get('smtp');
```

- Cómo cambiar valores

```php
LaravelRuntime::mail('mailers.smtp')->set('username', 'email@domain.com');
LaravelRuntime::mail('mailers.smtp')->set('password', 'XXXXXXXXX');
LaravelRuntime::mail('mailers.smtp')->set('port', 587);
```

### Queue (Configuración de los valores del archivo queue.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/queue.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::queue()->get('default');
```

- Cómo cambiar valores

```php
LaravelRuntime::queue('connections.sync')->set('driver', 'sync');
```

### Sanctum (Configuración de los valores del archivo sanctum.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/sanctum.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::sanctum()->get('expiration');
```

- Cómo cambiar valores

```php
LaravelRuntime::sanctum()->set('expiration', null);
```

### Services (Configuración de los valores del archivo services.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/services.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::services('mailgun')->get('domain');
```

- Cómo cambiar valores

```php
LaravelRuntime::services('mailgun')->set('domain', 'XXXXXXXX');
```

### Session (Configuración de los valores del archivo session.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/session.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::session()->get('lifetime');
```

- Cómo cambiar valores

```php
LaravelRuntime::session()->set('lifetime', 60);
```

### View (Configuración de los valores del archivo view.php)

Podrás modificar u obtener cualquier valor que se encuentre definido dentro del archivo `config/view.php` de Laravel.

- Cómo obtener valores

```php
LaravelRuntime::view()->get('paths');
```

- Cómo cambiar valores

```php
LaravelRuntime::view()->set('paths', [
    resource_path('views'),
]);
```

## Creador
- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
