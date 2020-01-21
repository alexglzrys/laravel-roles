<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">Sistema de Administración de Roles y Permisos mediante el paquete Shinobi</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de Laravel Roles

Este proyecto tiene como finalidad implementar un sistema de roles y permisos, para la administración de un catálogo de productos genéricos.

- Framework Laravel 6.x
- MySQL 5.x
- Bootstrap 4
- FontAwesome 5
- Shinobi 5
- LaravelCollective/HTML 6

#### Instalación

Configurar permisos en el directorio storage de la aplicación
~~~
sudo chmod 755 -R storage
~~~

Instalar las dependencias del proyecto
~~~
composer install
~~~

Crear una copia del archivo .env.example con la configuración correcta del proyecto. **Por ejemplo, credenciales de acceso a la Base de Datos**
~~~
cp .env.example .env
~~~

Crear un nuevo API Key para la aplicación
~~~
php artisan key:generate
~~~

Crear la base de datos para el proyecto mediante algún Sistema Administrador de Bases de Datos Relacionales soportado por Laravel. **Por ejemplo, MySQL**. Finalmente, registre las credenciales de acceso en el archivo de configuración .env
~~~
mysql> CREATE DATABASE nombre_db;
~~~

Ejecutar las migraciones y sembrar los datos de prueba
~~~
php artisan migrate --seed
~~~

Ejecutar la aplicación. **Por ejemplo, mediante el servidor HTTP integrado en Laravel**
~~~
php artisan serve
~~~

#### Instrucciones
1. Al iniciar la aplicación, es necesario registrar un nuevo usuario en el sistema, el cuál, más adelante se le deben otorgar los permisos necesarios para administrar la información almacenada en el sistema.
3. Cierre sesión en el sistema.
2. Ingrese nuevamente en el sistema con las siguientes credenciales:
 **email: alexglzrys@gmail.com**
 **password: 123456789**
 y en la sección de usuarios, edite las credenciales del usuario previamente creado, otorgando el rol (conjunto de permisos) que más se adapten a sus necesidades.