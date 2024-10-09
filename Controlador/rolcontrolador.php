<?php
include '../config.php';
include '../modelo/rol.php';

$rolModel = new Rol($conn);

// Mostrar roles
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $roles = $rolModel->obtenerRoles();
    include '../vista/asignacion_roles.php';
}

// Insertar nuevo rol
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nuevo_rol'])) {
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $rolModel->insertarRol($descripcion, $estado);
    header('Location: rolcontrolador.php');
    exit();
}

// Editar rol
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar_rol'])) {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $rolModel->editarRol($id, $descripcion, $estado);
    header('Location: rolcontrolador.php');
    exit();
}

// Eliminar rol
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $rolModel->eliminarRol($id);
    header('Location: rolcontrolador.php');
    exit();
}
?>
