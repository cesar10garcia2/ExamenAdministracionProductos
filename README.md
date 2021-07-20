# Examen Administración Productos

(Listar, crear, editar y buscar productos) solo a usuario autenticados.

# Sistema
El pequeño sistema está desarrollado en Laravel 6.0
Para implementarlo necesita tener instalado composer en su pc.

- Duplique el archivo .env.example con el nombre .env, en el archivo puede poner las variables de entorno de la base de datos mysql.
- Instale los paquetes necesarios para el proyecto, ejecutando el siguiente comando en la raíz "composer install".
- Crear una base de datos limpia sin tablas con el nombre "examen_el_comercio" y asociarla al archivo .env.
- Ejecutar el comando "php artisan migrate" para crear las tablas en la db.
- Ejecutar el comando "php artisan serve" para habilitar el proyecto en la ruta http://localhost:8000/

# Código
El código está organizado en:
- Rutas: routes/web.php
- Controladores: app/Http/Controllers
- Vistas: resource/views

## Objetivos
- Sistema de Inicio de Sesión y Registro de usuario.
- Medidas de seguridad de autenticación mediante un Middleware en las rutas de navegación.
- Crud para la administración de productos.




