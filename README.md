# Laboratorio DS7: Sistema de Autenticación con Laravel 

Este proyecto corresponde al Laboratorio 2 del curso de Desarrollo de Software VII. Consiste en la implementación de un sistema de autenticación funcional utilizando el framework Laravel y el entorno de compilación Vite para la gestión de activos frontend.

---

## Características del Proyecto

* **Sistema de Registro**: Permite la creación de nuevos usuarios mediante validación de datos.
* **Sistema de Login**: Acceso restringido para usuarios registrados con manejo de sesiones.
* **Interfaz de Usuario**: Diseño basado en Bootstrap para una apariencia profesional y adaptable.
* **Base de Datos Relacional**: Gestión de usuarios mediante tablas migradas en MySQL.

---

## Tecnologías Utilizadas

* **Framework**: Laravel 11.x
* **Lenguaje**: PHP 8.x
* **Gestor de Paquetes**: Composer y NPM
* **Motor de Plantillas**: Blade
* **Compilador**: Vite
* **Base de Datos**: MySQL (WampServer)

---

## Instrucciones de Configuración y Ejecución

Para poner en marcha el proyecto en un entorno local, siga estos pasos:

1. **Instalación de Dependencias**:
   Ejecute los siguientes comandos en la terminal del proyecto para instalar las librerías necesarias de PHP y Node.js:
   ```bash
   composer install
   npm install
Configuración de la Base de Datos:
Cree una base de datos en su servidor local (phpMyAdmin) y actualice las credenciales en el archivo .env:

Fragmento de código
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=root
DB_PASSWORD=
Ejecución de Migraciones:
Cree las tablas de autenticación en la base de datos:

Bash
php artisan migrate
Compilación de Estilos:
Genere los archivos CSS y JS compilados para visualizar correctamente el diseño:

Bash
npm run build
Servidor de Aplicación:
Inicie el servidor local de Laravel:

Bash
php artisan serve
Solución de Problemas Comunes
Durante el desarrollo se presentaron los siguientes inconvenientes técnicos:

Política de Ejecución de Scripts: Se solucionó habilitando la política de ejecución en PowerShell para permitir el uso de comandos NPM.

Visualización de Estilos: Se corrigió el error de carga de CSS ejecutando la compilación física mediante Vite (npm run build) y ajustando la URL del activo en el archivo de configuración.

Capturas de laravel
<img width="1893" height="876" alt="image" src="https://github.com/user-attachments/assets/d282f93a-fc57-4024-8047-9cd9970a47bd" />
<img width="1437" height="572" alt="image" src="https://github.com/user-attachments/assets/df0b28b9-0f48-454b-bec1-889fc7acc699" />
<img width="1428" height="570" alt="image" src="https://github.com/user-attachments/assets/0480407d-a1f0-4c60-9783-7923575fadd3" />




Datos del Estudiante
Nombre: Samuel Ojo Ruiz

Curso: Desarrollo de Software VII

Facultad: Facultad de Ingeniería de Sistemas Computacionales

Institución: Universidad Tecnológica de Panamá
