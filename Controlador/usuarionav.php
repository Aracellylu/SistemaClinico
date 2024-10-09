<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Verificar el rol del usuario y cargar la barra de navegación correspondiente
if ($_SESSION['role'] == 'Administrador') {
    include 'navbar.php';
} elseif ($_SESSION['role'] == 'Médico') {
    include 'navbar_medico.php';
} elseif ($_SESSION['role'] == 'Enfermera') {
    include 'navbar_enfermera.php';
} elseif ($_SESSION['role'] == 'Cajero') {
    include 'navbar_cajero.php';
} else {
    // Si no tiene un rol válido, redirigir a la página de login o mostrar error
    header("Location: login.php");
    exit();
}
?>
