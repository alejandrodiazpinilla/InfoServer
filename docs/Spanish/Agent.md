# Agent: Descubre y Analiza la Información del Agente de Conexión
La librería `Agent` ofrece una gran variedad de métodos que te permitirán conocer y analizar los datos del agente de conexión a la aplicación.

![AGENT](https://github.com/rmunate/PHPInfoServer/assets/91748598/f1ee8001-aa76-49c3-82ad-49014b28fd61)

## Tabla de Contenido
1. [Metodos Disponibles](#metodos-disponibles)
2. [Creador](#creador)
3. [Licencia](#licencia)

## Metodos Disponibles

| Método                                     | Descripción                                                                                     |
|--------------------------------------------|-------------------------------------------------------------------------------------------------|
| `Agent::get()`                             | Retorna el agente de conexión actual.                                                            |
| `Agent::detected()->isMobile()`            | Valida si el agente proviene de un dispositivo móvil.                                           |
| `Agent::detected()->isDesktop()`           | Retorna `true` si el usuario no está accediendo desde un dispositivo móvil.                    |
| `Agent::detected()->isIPhone()`            | Retorna `true` si el agente del usuario corresponde a un iPhone.                                |
| `Agent::detected()->isMacintosh()`         | Retorna `true` si el agente del usuario corresponde a un sistema operativo Macintosh.           |
| `Agent::detected()->isLinux()`             | Retorna `true` si el agente del usuario corresponde a un sistema operativo Linux (PC o sistemas Android). |
| `Agent::detected()->isWindows()`           | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows.            |
| `Agent::detected()->isWindowsPhone()`      | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows Phone.       |
| `Agent::detected()->isIpod()`              | Retorna `true` si el agente del usuario corresponde a un iPod.                                  |
| `Agent::detected()->isIpad()`              | Retorna `true` si el agente del usuario corresponde a un iPad.                                  |
| `Agent::detected()->isIMac()`              | Retorna `true` si el agente del usuario corresponde a un iMac.                                  |
| `Agent::detected()->clientOS()`            | Retorna el nombre del sistema operativo del cliente actual.                                     |
| `Agent::detected()->browser()`             | Retorna información sobre el navegador utilizado por el cliente.                                |
| `Agent::detected()->remoteAddress()`       | Retorna la IP en uso en la conexión al sistema.                                                 |
| `Agent::detected()->remotePort()`          | Retorna el puerto en uso en la conexión al sistema.                                             |

Con esta potente herramienta, podrás extraer datos de la conexión a tu aplicación y ofrecer diferentes experiencias dependiendo de qué sistema, navegador o dispositivo utilice el usuario al conectarse.

## Creador

- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

¡Descubre la información del agente de conexión con facilidad y optimiza la experiencia de tus usuarios!