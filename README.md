# Examen Administración Productos
Listado, crear, editar y buscar productos.

# Sistema
El pequeño sistema esta desarrollado en Laravel 6.0
Para implementarlo necesita tener instalado composer en su pc.

- Duplique el archivo .env.example con el nombre .env, en el archivo puede poner las variables de entorno de la base de datos mysql.
- Instale los paquetes necesarios para el proyecto ejecutando el siguiente comando en la raiz del proyecto "composer install".
- Crear una base de datos limpia sin tablas con el nombre "exanen_el_comercio" y asociarla al archivo .env.
- Ejecutar el comando "php artisan migrate" para crear las tablas que usa en proyecto en la db.
- Ejecutar el comando "php artisan serve" para habilitar el proyecto en la ruta http://localhost:8000/

# Codigo
El codigo esta organizado en:
- Rutas: routes/web.php
- Controladores: app/Http/Controllers
- Vistas: resource/views

## Objetivos
- Sistema de Inicio de Sesion y Registro de usuario.
- Medidas de seguridad de autenticacion mediante un Middleware en las rutas de navegacion.
- Crud para la administración de productos.



