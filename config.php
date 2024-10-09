<?php
// Configuración de la conexión a la base de datos
$host = "localhost";
$user = "root"; // Cambiar si usas otro usuario
$password = ""; // Cambiar si tienes una contraseña
$database = "sistema_clinica";

$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
