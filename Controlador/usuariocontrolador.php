<?php
session_start();
require_once '../config.php'; // Conexión a la base de datos
require_once '../modelo/Usuario.php'; // Modelo de Usuario

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Instancia del modelo Usuario
$usuario = new Usuario($conn);

// Validar credenciales
$user = $usuario->validarUsuario($username, $password);

if ($user) {
    // Guardar la información del usuario en la sesión
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    // Redirigir según el rol
    if ($user['role'] == 'Administrador') {
        header("Location: ../vista/dashboard_admin.php");
    } elseif ($user['role'] == 'Médico') {
        header("Location: ../vista/dashboard_medico.php");
    } elseif ($user['role'] == 'Enfermera') {
        header("Location: ../vista/dashboard_enfermera.php");
    } elseif ($user['role'] == 'Cajero') {
        header("Location: ../vista/dashboard_cajero.php");
    } elseif ($user['role'] == 'Paciente') {
        header("Location: ../vista/dashboard_paciente.php");
    }
} else {
    // Error: credenciales incorrectas
    echo "<script>alert('Credenciales incorrectas'); window.location.href = '../vista/login.php';</script>";
}

?>
