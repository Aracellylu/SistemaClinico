<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Horarios</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-container {
            margin-top: 50px;
        }
        .btn-custom {
            margin-bottom: 20px;
        }
        .form-control-inline {
            display: inline-block;
            width: auto;
        }
    </style>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="container table-container contenido-con-navbar">
        <!-- Filtros de Búsqueda -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control form-control-inline w-25" placeholder="Servicio">
            <input type="text" class="form-control form-control-inline w-25" placeholder="Nombre Completo">
            <input type="text" class="form-control form-control-inline w-25" placeholder="Sexo">
            <div>
                <button class="btn btn-primary">Buscar</button>
                <button class="btn btn-success">Asignar</button>
            </div>
        </div>

        <!-- Horarios -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Activar</th>
                    <th>Día</th>
                    <th>Turno</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Lunes</td>
                    <td>
                        <select class="form-select form-control-inline">
                            <option selected>Día Completo</option>
                            <option>Mañana</option>
                            <option>Tarde</option>
                        </select>
                    </td>
                    <td><input type="time" class="form-control form-control-inline" value="08:00"></td>
                    <td><input type="time" class="form-control form-control-inline" value="13:00"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>Martes</td>
                    <td>
                        <select class="form-select form-control-inline">
                            <option selected>Día Completo</option>
                            <option>Mañana</option>
                            <option>Tarde</option>
                        </select>
                    </td>
                    <td><input type="time" class="form-control form-control-inline" value="08:00"></td>
                    <td><input type="time" class="form-control form-control-inline" value="13:00"></td>
                </tr>
                <!-- Más días se pueden agregar aquí -->
            </tbody>
        </table>

        <!-- Tabla de Médicos Asignados -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Médico</th>
                    <th>Día</th>
                    <th>Turno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Oftalmología</td>
                    <td>Julia Benites</td>
                    <td>Jueves</td>
                    <td>Mañana</td>
                    <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
                <tr>
                    <td>Dermatología</td>
                    <td>Raul Espinoza</td>
                    <td>Viernes</td>
                    <td>Tarde</td>
                    <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
                <tr>
                    <td>Geriatría</td>
                    <td>Alejandro Rivas</td>
                    <td>Lunes</td>
                    <td>Tarde</td>
                    <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>