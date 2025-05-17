# Backend para Alpha Coders

Este es el backend simple desarrollado para manejar el formulario de contacto del sitio web Alpha Coders.

## Requisitos

- XAMPP (o cualquier servidor con PHP y MySQL)
- PHP 7.0 o superior
- MySQL 5.7 o superior

## Instalación

1. Asegúrate de tener XAMPP instalado en tu computadora.
2. Coloca todo el sitio web en la carpeta `htdocs` de XAMPP.
3. Inicia los servicios de Apache y MySQL desde el panel de control de XAMPP.
4. Abre un navegador web y navega a `http://localhost/alpha_coders/backend/setup.php` para configurar la base de datos (solo necesitas hacer esto una vez).
5. Una vez que veas el mensaje de confirmación, el backend está listo para usar.
6. Por seguridad, elimina el archivo `setup.php` después de la configuración inicial.

## Estructura

- `config.php`: Contiene la configuración de conexión a la base de datos.
- `procesar_contacto.php`: Procesa los datos del formulario de contacto.

## Uso

El formulario de contacto en la página principal (`index.html`) está conectado al backend. Cuando un usuario envía un mensaje, los datos se guardan en la base de datos MySQL y se envía una notificación por correo electrónico.

## Notas de seguridad

- Este es un backend básico. Para un entorno de producción, considera implementar medidas de seguridad adicionales.
- La configuración actual utiliza el usuario root sin contraseña, lo cual es apropiado solo para desarrollo local.
- Para entornos de producción, crea un usuario de base de datos específico con privilegios limitados. 