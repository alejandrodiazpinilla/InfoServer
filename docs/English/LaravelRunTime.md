# LaravelRuntime: Configure Laravel on the Fly!
The `LaravelRuntime` Library empowers you to modify Laravel configuration values at runtime. It's essential to note that these changes won't affect the values in the `.env` file; they will only apply while your scripts are running.

![RUNTIME_LARAVEL](https://github.com/rmunate/PHPInfoServer/assets/91748598/b3f78d8b-9f01-4c81-8d08-a0f86791c4f9)

Below, we'll provide several possible examples to help you grasp the extensive ease of use.

## Table of Contents
1. [Available Methods](#available-methods)
   - [App](#app-configuration-values-of-appphp-file)
   - [Auth](#auth-configuration-values-of-authphp-file)
   - [Broadcasting](#broadcasting-configuration-values-of-broadcastingphp-file)
   - [Cache](#cache-configuration-values-of-cachephp-file)
   - [Cors](#cors-configuration-values-of-corsphp-file)
   - [Database](#database-configuration-values-of-databasephp-file)
   - [Filesystems](#filesystems-configuration-values-of-filesystemsphp-file)
   - [Hashing](#hashing-configuration-values-of-hashingphp-file)
   - [Logging](#logging-configuration-values-of-loggingphp-file)
   - [Mail](#mail-configuration-values-of-mailphp-file)
   - [Queue](#queue-configuration-values-of-queuephp-file)
   - [Sanctum](#sanctum-configuration-values-of-sanctumphp-file)
   - [Services](#services-configuration-values-of-servicesphp-file)
   - [Session](#session-configuration-values-of-sessionphp-file)
   - [View](#view-configuration-values-of-viewphp-file)
2. [Creator](#creator)
3. [License](#license)

## Available Methods

Here are the possible uses of the library; it's straightforward and highly flexible, allowing you to master Laravel configuration with ease.

### App (Configuration values of app.php file)

You can modify or retrieve any value defined within the `config/app.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::app()->get('APP_NAME');
LaravelRuntime::app('maintenance')->get('driver');
```

- How to change values

```php
LaravelRuntime::app()->set('APP_NAME', 'CodeMaestro');
LaravelRuntime::app('maintenance')->set('driver', 'file');
```

### Auth (Configuration values of auth.php file)

You can modify or retrieve any value defined within the `config/auth.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::auth('defaults')->get('guard');
LaravelRuntime::auth()->get('defaults.guard');
```

- How to change values

```php
LaravelRuntime::auth('defaults')->set('guard', 'api');
LaravelRuntime::auth()->set('defaults.guard', 'api');
```

### Broadcasting (Configuration values of broadcasting.php file)

You can modify or retrieve any value defined within the `config/broadcasting.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::broadcasting()->get('default');
LaravelRuntime::broadcasting('connections.pusher')->get('driver');
```

- How to change values

```php
LaravelRuntime::broadcasting()->set('default', 'null');
LaravelRuntime::broadcasting('connections.pusher')->set('driver', 'pusher');
```

### Cache (Configuration values of cache.php file)

You can modify or retrieve any value defined within the `config/cache.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::cache()->get('default');
LaravelRuntime::cache('stores.array.driver')->get();
```

- How to change values

```php
LaravelRuntime::cache()->set('default', 'null');
LaravelRuntime::cache('stores.array')->set('driver', 'array');
```

### Cors (Configuration values of cors.php file)

You can modify or retrieve any value defined within the `config/cors.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::cors()->get('supports_credentials');
```

- How to change values

```php
LaravelRuntime::cors()->set('supports_credentials', false);
```

### Database (Configuration values of database.php file)

You can modify or retrieve any value defined within the `config/database.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::database('connections')->get('mysql');
LaravelRuntime::database('connections.mysql')->get('database');
```

- How to change values

```php
LaravelRuntime::database('connections.mysql')->set('database', 'newDB');
LaravelRuntime::database('connections.mysql')->set('username', 'newUser');
LaravelRuntime::database('connections.mysql')->set('password', 'newPass');
```

### Filesystems (Configuration values of filesystems.php file)

You can modify or retrieve any value defined within the `config/filesystems.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::filesystems('disks')->get('s3');
```

- How to change values

```php
LaravelRuntime::filesystems('disks.s3')->set('key', 'XXXXXXX');
LaravelRuntime::filesystems('disks.s3')->set('secret', 'XXXXXXX');
```

### Hashing (Configuration values of hashing.php file)

You can modify or retrieve any value defined within the `config/hashing.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::hashing()->get('driver');
```

- How to change values

```php
LaravelRuntime::hashing()->set('driver', 'bcrypt');
```

### Logging (Configuration values of logging.php file)

You can modify or retrieve any value defined within the `config/logging.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::logging('channels')->get('stack');
```

- How to change values

```php
LaravelRuntime::logging('channels.stack')->set('driver', 'stack');
```

### Mail (Configuration values of mail.php file)

You can modify or retrieve any value defined within the `config/mail.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::mail('mailers')->get('smtp');
```

- How to change values

```php
LaravelRuntime::mail('mail

ers.smtp')->set('username', 'email@domain.com');
LaravelRuntime::mail('mailers.smtp')->set('password', 'XXXXXXXXX');
LaravelRuntime::mail('mailers.smtp')->set('port', 587);
```

### Queue (Configuration values of queue.php file)

You can modify or retrieve any value defined within the `config/queue.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::queue()->get('default');
```

- How to change values

```php
LaravelRuntime::queue('connections.sync')->set('driver', 'sync');
```

### Sanctum (Configuration values of sanctum.php file)

You can modify or retrieve any value defined within the `config/sanctum.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::sanctum()->get('expiration');
```

- How to change values

```php
LaravelRuntime::sanctum()->set('expiration', null);
```

### Services (Configuration values of services.php file)

You can modify or retrieve any value defined within the `config/services.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::services('mailgun')->get('domain');
```

- How to change values

```php
LaravelRuntime::services('mailgun')->set('domain', 'XXXXXXXX');
```

### Session (Configuration values of session.php file)

You can modify or retrieve any value defined within the `config/session.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::session()->get('lifetime');
```

- How to change values

```php
LaravelRuntime::session()->set('lifetime', 60);
```

### View (Configuration values of view.php file)

You can modify or retrieve any value defined within the `config/view.php` file of Laravel.

- How to retrieve values

```php
LaravelRuntime::view()->get('paths');
```

- How to change values

```php
LaravelRuntime::view()->set('paths', [
    resource_path('views'),
]);
```

## Creator
- 🇨🇴 Raúl Mauricio Uñate Castro
- Email: raulmauriciounate@gmail.com

## License
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
