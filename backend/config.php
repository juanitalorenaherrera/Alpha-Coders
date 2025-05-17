<?php
// Configuración de la base de datos
$db_host = 'localhost';     // Host de la base de datos
$db_user = 'root';          // Usuario de MySQL (por defecto en XAMPP)
$db_password = '';          // Contraseña (vacía por defecto en XAMPP)
$db_name = 'alpha_coders';  // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres a utf8
$conn->set_charset("utf8");
?> 