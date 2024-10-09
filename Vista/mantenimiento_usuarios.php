<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de Usuarios</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-container {
            margin-top: 50px;
        }
        .btn-custom {
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!-- Incluyendo Barra de Navegacíon-->

    <div class="container table-container contenido-con-navbar">
        <!-- Botón para agregar nuevo -->
        <div class="d-flex justify-content-between">
            <button class="btn btn-success btn-custom">Nuevo</button>
            <!-- Campo de búsqueda -->
            <input type="text" class="form-control w-25" placeholder="Buscar">
        </div>

        <!-- Tabla de usuarios -->
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rol</th>
                    <th>Usuario</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Triaje</td>
                    <td>Content</td>
                    <td>Juan</td>
                    <td>Perez</td>
                    <td>Masculino</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Médico</td>
                    <td>Content</td>
                    <td>Fernanda</td>
                    <td>Saenz</td>
                    <td>Femenino</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Médico</td>
                    <td>Content</td>
                    <td>Maria</td>
                    <td>Alvarado</td>
                    <td>Femenino</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cajero</td>
                    <td>Content</td>
                    <td>Samuel</td>
                    <td>Madrid</td>
                    <td>Masculino</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Médico</td>
                    <td>Content</td>
                    <td>Carlos</td>
                    <td>Sanchez</td>
                    <td>Masculino</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
