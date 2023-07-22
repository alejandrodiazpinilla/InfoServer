# Agent: Discover and Analyze Connection Agent Information
The `Agent` library offers a wide range of methods that allow you to discover and analyze data from the connection agent to the application.

![AGENT](https://github.com/rmunate/PHPInfoServer/assets/91748598/f1ee8001-aa76-49c3-82ad-49014b28fd61)

## Table of Contents
1. [Available Methods](#available-methods)
2. [Creator](#creator)
3. [License](#license)

## Available Methods

| Method                                     | Description                                                                                   |
|--------------------------------------------|-----------------------------------------------------------------------------------------------|
| `Agent::get()`                             | Returns the current connection agent.                                                         |
| `Agent::detected()->isMobile()`            | Checks if the agent comes from a mobile device.                                               |
| `Agent::detected()->isDesktop()`           | Returns `true` if the user is not accessing from a mobile device.                             |
| `Agent::detected()->isIPhone()`            | Returns `true` if the user agent corresponds to an iPhone.                                    |
| `Agent::detected()->isMacintosh()`         | Returns `true` if the user agent corresponds to a Macintosh operating system.                 |
| `Agent::detected()->isLinux()`             | Returns `true` if the user agent corresponds to a Linux operating system (PC or Android systems). |
| `Agent::detected()->isWindows()`           | Returns `true` if the user agent corresponds to a Windows operating system.                   |
| `Agent::detected()->isWindowsPhone()`      | Returns `true` if the user agent corresponds to a Windows Phone operating system.             |
| `Agent::detected()->isIpod()`              | Returns `true` if the user agent corresponds to an iPod.                                      |
| `Agent::detected()->isIpad()`              | Returns `true` if the user agent corresponds to an iPad.                                      |
| `Agent::detected()->isIMac()`              | Returns `true` if the user agent corresponds to an iMac.                                      |
| `Agent::detected()->clientOS()`            | Returns the name of the current client operating system.                                      |
| `Agent::detected()->browser()`             | Returns information about the browser used by the client.                                     |
| `Agent::detected()->remoteAddress()`       | Returns the IP in use in the connection to the system.                                        |
| `Agent::detected()->remotePort()`          | Returns the port in use in the connection to the system.                                      |

With this powerful tool, you can extract connection data from your application and offer different experiences depending on the system, browser, or device the user is using to connect.

## Creator

- 🇨🇴 Raúl Mauricio Uñate Castro
- Email: raulmauriciounate@gmail.com

## License
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

Discover connection agent information with ease and optimize your users' experience!