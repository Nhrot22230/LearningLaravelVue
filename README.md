<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

---

# Proyecto Laravel con Vue.js y Vite

Este proyecto utiliza Laravel para el backend y Vue.js para el frontend, con integración de Vite para la gestión de activos y el desarrollo. A continuación se describen los pasos para la instalación y configuración del entorno, así como una explicación de las tecnologías utilizadas.

## Instalación y Configuración

### Instalación de PHP 8.3

1. **En Ubuntu/Debian:**

   ```bash
   sudo apt update
   sudo apt install php8.3 php8.3-cli php8.3-fpm php8.3-mysql php8.3-xml php8.3-mbstring
   ```

3. **En Windows:**
   - Descarga el instalador desde [PHP for Windows](https://windows.php.net/download/).
   - Sigue las instrucciones del instalador.

### Instalación de Laravel

1. Asegúrate de tener Composer instalado (ver sección a continuación).
2. Ejecuta el siguiente comando para crear un nuevo proyecto Laravel:

   ```bash
   composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
   ```

### Instalación de MySQL

1. **En Ubuntu/Debian:**

   ```bash
   sudo apt update
   sudo apt install mysql-server
   ```

2. **En Windows:**
   - Descarga el instalador desde [MySQL Downloads](https://dev.mysql.com/downloads/installer/).
   - Sigue las instrucciones del instalador.

### Instalación de Composer

1. **En Unix (Linux/macOS):**

   ```bash
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
   ```

2. **En Windows:**
   - Descarga el instalador desde [Composer](https://getcomposer.org/).
   - Sigue las instrucciones del instalador.

### Instalación de npm

Para instalar npm (Node Package Manager), sigue las instrucciones según tu sistema operativo:

1. **En Unix (Linux):**

   - usar nvm o fnm

2. **En Windows:**
   - Descarga el instalador desde [Node.js](https://nodejs.org/).
   - Sigue las instrucciones del instalador.

## Integración con Vite

Este proyecto usa Vite para la gestión de activos y el desarrollo rápido de frontend. Vite se encarga de proporcionar una experiencia de desarrollo rápida con recarga en caliente para Vue.js (o React si se usa).

### Configuración de Vite

1. **Instalación de Vite:**
   En el directorio del proyecto, ejecuta:

   ```bash
   npm install
   ```

2. **Ejecución de Vite:**
   Para iniciar el servidor de desarrollo de Vite, ejecuta:

   ```bash
   npm run dev
   ```

   Esto iniciará Vite en el puerto 5173 por defecto. Los archivos de Vue.js o React se compilarán y recargarán automáticamente durante el desarrollo.

3. **Integración con Laravel:**
   Laravel se encarga de servir el backend mientras que Vite maneja el frontend. Las vistas se sirven a través de Laravel, y los archivos de frontend (como `app.js` y `app.css`) se gestionan por Vite.

## Eloquent y DB Agnostic

Eloquent es el ORM (Object-Relational Mapper) de Laravel que facilita la interacción con la base de datos mediante un enfoque orientado a objetos. Eloquent es agnóstico a la base de datos porque abstrae el acceso a la base de datos a través de un conjunto de clases y métodos, permitiendo cambiar el motor de base de datos sin necesidad de reescribir el código de acceso a datos.

### Ventajas de Eloquent

- **Abstracción de Consultas:** Permite trabajar con modelos en lugar de escribir consultas SQL directamente.
- **Relaciones:** Soporta relaciones entre modelos (uno a uno, uno a muchos, muchos a muchos).
- **Migraciones y Seeders:** Facilita la gestión de esquemas y datos de prueba.

## Integración de Vistas con Vue o React

### Vue.js

1. **Instalación de Vue.js:**
   Asegúrate de que tienes `@vitejs/plugin-vue` en tu archivo `vite.config.js`.

2. **Creación de Componentes Vue:**
   Los componentes Vue se pueden crear en la carpeta `resources/js/components`. Usa la sintaxis `.vue` para los archivos de componentes.

3. **Importación en `app.js`:**

   ```javascript
   import { createApp } from 'vue';
   import Home from './components/Home.vue';

   const app = createApp(Home);
   app.mount('#app');
   ```

### React

1. **Instalación de React:**
   Asegúrate de que tienes `@vitejs/plugin-react` en tu archivo `vite.config.js`.

2. **Creación de Componentes React:**
   Los componentes React se pueden crear en la carpeta `resources/js/components`. Usa la sintaxis `.jsx` o `.js` para los archivos de componentes.

3. **Importación en `app.js`:**

   ```javascript
   import React from 'react';
   import ReactDOM from 'react-dom';
   import Home from './components/Home';

   ReactDOM.render(<Home />, document.getElementById('app'));
   ```

---

## Estructura de Directorios

Aquí hay una descripción general de las carpetas principales del proyecto:

- **`app/`**: Contiene la lógica principal de la aplicación, incluyendo modelos, controladores y middleware.
  - **`Models/`**: Contiene los modelos Eloquent.
  - **`Http/Controllers/`**: Contiene los controladores que gestionan las solicitudes HTTP.

- **`bootstrap/`**: Contiene archivos de arranque del sistema, como el archivo de configuración del entorno.

- **`config/`**: Contiene archivos de configuración de la aplicación.

- **`database/`**: Contiene migraciones, seeders y fábricas para la base de datos.
  - **`migrations/`**: Contiene archivos para crear y modificar tablas en la base de datos.
  - **`seeders/`**: Contiene archivos para poblar la base de datos con datos de prueba.

- **`public/`**: Contiene los archivos accesibles públicamente, como `index.php` y los activos (CSS, JavaScript).

- **`resources/`**: Contiene las vistas Blade, archivos de frontend (Vue.js o React) y archivos de idioma.
  - **`views/`**: Contiene archivos Blade que se usan para renderizar las vistas del servidor.
  - **`js/`**: Contiene archivos JavaScript para el frontend.

- **`routes/`**: Contiene los archivos de definición de rutas para la aplicación.
  - **`web.php`**: Contiene las rutas que responden a las solicitudes web.

- **`storage/`**: Contiene archivos generados por la aplicación, como archivos de logs y archivos cargados.

- **`tests/`**: Contiene pruebas para la aplicación.

- **`vite.config.js`**: Archivo de configuración de Vite. Aquí se configuran los plugins y las entradas de Vite.

## Detalles Adicionales

- **Vistas Blade**: Laravel utiliza Blade como su motor de plantillas. Los archivos `.blade.php` se encuentran en la carpeta `resources/views` y se utilizan para renderizar las vistas del servidor. Por ejemplo, `welcome.blade.php` es la vista que se muestra cuando se accede a la raíz del sitio web.

- **Archivos de Configuración**: Los archivos de configuración de Laravel se encuentran en `config/`. Estos archivos permiten configurar el comportamiento de Laravel y sus servicios.

- **Migraciones y Seeders**: Las migraciones permiten definir y modificar la estructura de la base de datos. Los seeders permiten llenar la base de datos con datos de prueba.

- **Comandos Artisan**: Laravel proporciona una serie de comandos útiles a través de Artisan. Puedes ver la lista de comandos disponibles ejecutando `php artisan list`.

---
