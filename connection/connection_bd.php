<?php
$servername = "127.0.0.1"; // Cambiar a la dirección de tu servidor de base de datos
$username = "root"; // Cambiar al nombre de usuario de tu base de datos
$password = "root"; // Cambiar a la contraseña de tu base de datos
$dbname = "store"; // Cambiar al nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
