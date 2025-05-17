<?php
// Configuración de la base de datos
$db_host = 'localhost';     // Host de la base de datos
$db_user = 'root';          // Usuario de MySQL (por defecto en XAMPP)
$db_password = '';          // Contraseña (vacía por defecto en XAMPP)

// Crear conexión
$conn = new mysqli($db_host, $db_user, $db_password);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS alpha_coders";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada o ya existente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

// Seleccionar la base de datos
$conn->select_db("alpha_coders");

// Crear la tabla de contactos
$sql = "CREATE TABLE IF NOT EXISTS contactos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(30),
    mensaje TEXT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'contactos' creada o ya existente<br>";
} else {
    echo "Error al crear la tabla: " . $conn->error . "<br>";
}

echo "Configuración completada. Por favor, elimine este archivo después de ejecutarlo por razones de seguridad.";

$conn->close();
?> 