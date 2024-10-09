<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Roles</title>

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

    <div class="container table-container contenido-con-navbar">
        <!-- Selección de Rol -->
        <div class="d-flex justify-content-between">
            <div class="mb-3">
                <label for="selectRol" class="form-label">Seleccionar Rol:</label>
                <select class="form-select" id="selectRol">
                    <option value="cajero">Cajero</option>
                    <option value="medico">Médico</option>
                    <option value="triaje">Triaje</option>
                </select>
            </div>
            <div>
                <button class="btn btn-primary">Buscar</button>
                <button class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>

        <!-- Tabla de Asignación de Roles -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Activar</th>
                    <th>Menu</th>
                    <th>Sub Menu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Mantenimiento</td>
                    <td>Personal</td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>Registros</td>
                    <td>Pagos</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Registros</td>
                    <td>Triaje</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Reportes</td>
                    <td>Pacientes</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Reportes</td>
                    <td>Personal</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>