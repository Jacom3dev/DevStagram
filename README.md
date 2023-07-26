# DevStagram - Plataforma Social para Desarrolladores
Este proyecto es del curo [Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC](https://www.udemy.com/course/curso-laravel-crea-aplicaciones-y-sitios-web-con-php-y-mvc)] de @codigoconjuan

Este proyecto es una plataforma social desarrollada en Laravel 10 y utiliza MySQL como base de datos, creada especialmente para la comunidad de desarrolladores. Sigue los pasos a continuación para ejecutar el proyecto en tu entorno local.


## Requisitos previos 
Asegúrate de tener instalados los siguientes elementos antes de continuar:
 1.  **XAMPP:** Descarga e instala XAMPP, que incluye Apache y MySQL, desde el siguiente enlace: [Descargar XAMPP](https://www.apachefriends.org/download.html)
 2.    **Composer:** Si no tienes Composer instalado, puedes descargarlo e instalarlo desde el siguiente enlace: [Descargar Composer](https://getcomposer.org/download/)

## Instalación 
 1.  **Clonar el repositorio:**
ejecutar:  git clone https://github.com/Jacom3dev/DevStagram.git

2.  **Instalar dependencias:**
ejecutar: composer install

3.  **Configurar la base de datos:**
- Crea una base de datos MySQL para el proyecto en tu entorno local. - Copia el archivo `.env.example` y renómbralo a `.env`. - En el archivo `.env`, modifica las siguientes líneas con los detalles de tu base de datos: 

	**DB_DATABASE**=nombre_de_tu_base_de_datos 
	**DB_USERNAME**=tu_usuario_de_mysql
	**DB_PASSWORD**=tu_contraseña_de_mysql
 
4.  **Ejecutar migraciones:**
ejecutar: php artisan migrate

4.  **Iniciar Vite:**
ejecutar: npm i && npm run dev

5.  **Iniciar el servidor:**
ejecutar: php artisan serve
