# Guía para desplegar el sitio web Alpha Coders

Esta guía te explicará paso a paso cómo desplegar tu sitio web Alpha Coders en un servidor web en producción.

## Requisitos previos

1. Un servicio de hosting web con:
   - PHP 7.0 o superior
   - MySQL 5.7 o superior
   - Soporte para correo SMTP

2. Un nombre de dominio (opcional pero recomendado)

## Paso 1: Preparar los archivos

1. Asegúrate de tener la última versión de todos los archivos del sitio.
2. Comprime todos los archivos en un archivo ZIP para facilitar la subida.

## Paso 2: Contratar un servicio de hosting

Si aún no tienes un servicio de hosting, aquí hay algunas opciones populares:
- Hostinger
- SiteGround
- HostGator
- GoDaddy
- Webempresa

Estos servicios suelen ofrecer paquetes que incluyen:
- Espacio de almacenamiento
- Bases de datos MySQL
- Dominios gratuitos/pagos
- Certificados SSL

Selecciona el plan que mejor se adapte a tus necesidades y presupuesto.

## Paso 3: Configurar el dominio

1. Si has adquirido un dominio con tu hosting, configúralo según las instrucciones del proveedor.
2. Si compraste el dominio por separado, necesitarás:
   - Actualizar los DNS del dominio para que apunten a tu hosting
   - Configurar el dominio en tu panel de control del hosting

## Paso 4: Subir los archivos al servidor

1. Accede al panel de control de tu hosting (cPanel, Plesk, etc.).
2. Busca la sección de administrador de archivos o FTP.
3. Navega hasta la carpeta pública (generalmente llamada `public_html`, `www` o `htdocs`).
4. Sube todos los archivos de tu sitio web (puedes subir el ZIP y descomprimirlo en el servidor).

Alternativamente, puedes usar un cliente FTP como FileZilla:
1. Descarga e instala FileZilla desde [filezilla-project.org](https://filezilla-project.org/).
2. Conecta a tu servidor usando las credenciales FTP proporcionadas por tu hosting.
3. Sube los archivos a la carpeta pública.

## Paso 5: Configurar la base de datos

1. Accede al panel de control de tu hosting.
2. Busca la sección de bases de datos MySQL.
3. Crea una nueva base de datos con el nombre `alpha_coders` (o el nombre que prefieras).
4. Crea un nuevo usuario y asígnalo a esta base de datos con todos los permisos.
5. Anota el nombre de la base de datos, nombre de usuario, contraseña y host.

## Paso 6: Modificar el archivo de configuración

1. Abre el archivo `backend/config.php` en un editor de texto (puedes usar el editor de archivos del panel de control).
2. Actualiza las credenciales con la información de tu base de datos:

```php
// Configuración de la base de datos
$db_host = 'tu_host_mysql';    // Generalmente 'localhost'
$db_user = 'tu_usuario_mysql';  
$db_password = 'tu_contraseña_mysql';
$db_name = 'tu_nombre_bd';     // Por ejemplo, 'alpha_coders'
```

## Paso 7: Crear la tabla necesaria para el formulario

Tienes dos opciones:

### Opción 1: Usando el script de configuración
1. Si incluiste el archivo `setup.php` mencionado en el README, accede a él desde tu navegador:
   `https://tudominio.com/backend/setup.php`
2. Sigue las instrucciones en pantalla para crear la tabla.
3. Por seguridad, elimina el archivo `setup.php` después de usarlo.

### Opción 2: Creación manual
Si no tienes el archivo `setup.php`, crea la tabla manualmente:

1. Accede a phpMyAdmin desde el panel de control de tu hosting.
2. Selecciona tu base de datos.
3. Ve a la pestaña SQL y ejecuta el siguiente código:

```sql
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

## Paso 8: Configurar el envío de correos electrónicos

1. Abre el archivo `backend/procesar_contacto.php`.
2. Localiza la sección de configuración de PHPMailer (línea 41 aproximadamente).
3. Reemplaza la información de SMTP con tus credenciales:

```php
$mail->Host       = 'tu_servidor_smtp';    // Por ejemplo: smtp.gmail.com
$mail->Username   = 'tu_email@ejemplo.com';
$mail->Password   = 'tu_contraseña_o_token'; 
```

### Configuración para Gmail
Si usas Gmail, necesitarás crear una "Contraseña de aplicación":
1. Ve a tu cuenta de Google > Seguridad.
2. Activa la verificación en dos pasos si no está activada.
3. Crea una contraseña de aplicación para "Otra aplicación".
4. Usa esa contraseña en tu configuración de PHPMailer.

## Paso 9: Configurar enlaces internos

1. Revisa todos los enlaces en tu archivo `index.php`.
2. Asegúrate de que los enlaces a recursos internos sean correctos.
3. Actualiza la acción del formulario si es necesario para que apunte a `backend/procesar_contacto.php`.

## Paso 10: Proteger archivos sensibles

1. Crea o edita un archivo `.htaccess` en la carpeta `backend` con el siguiente contenido:

```
# Protege los archivos PHP excepto los endpoints necesarios
<FilesMatch "^(?!procesar_contacto\.php).*\.php$">
  Order deny,allow
  Deny from all
</FilesMatch>

# Previene la navegación por directorios
Options -Indexes
```

## Paso 11: Configurar SSL (HTTPS)

1. Activa el certificado SSL desde el panel de control de tu hosting (muchos ofrecen Let's Encrypt gratis).
2. Una vez activado, asegúrate de que tu sitio cargue por HTTPS.

## Paso 12: Prueba el sitio web

1. Visita tu sitio web en `https://tudominio.com`.
2. Verifica que todas las páginas carguen correctamente.
3. Prueba el formulario de contacto enviando un mensaje.
4. Confirma que:
   - Los datos se guarden en la base de datos
   - Los correos electrónicos se envíen correctamente

## Solución de problemas comunes

### El formulario no envía mensajes
- Verifica la conexión a la base de datos
- Asegúrate de que la tabla `contactos` esté creada correctamente
- Revisa los logs de errores de PHP en tu hosting

### Los correos no se envían
- Verifica las credenciales SMTP
- Consulta con tu proveedor si bloquea puertos SMTP
- Si usas Gmail, asegúrate de que la "Contraseña de aplicación" esté correctamente configurada

### Errores 500 o páginas en blanco
- Habilita la visualización de errores en PHP para diagnóstico (solo temporalmente)
- Revisa los logs de errores del servidor

## Mantenimiento continuo

1. Realiza copias de seguridad regulares de:
   - Archivos del sitio web
   - Base de datos
2. Mantén actualizado PHP y sus extensiones.
3. Revisa periódicamente si hay mensajes de contacto en la base de datos.

¡Felicidades! Tu sitio web Alpha Coders ya debería estar funcionando en producción. 