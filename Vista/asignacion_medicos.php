<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Médicos con Especialidades</title>

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
        <h2>Asignación de Médicos con Especialidades</h2>

        <!-- Selección de Médico -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="medico" class="form-label">Seleccionar Médico:</label>
                <select class="form-select" id="medico">
                    <option value="Cabanillas Garcia Carmen">Cabanillas Garcia Carmen</option>
                    <option value="Gonzales Lopez Juan">Gonzales Lopez Juan</option>
                    <option value="Rojas Perez Ana">Rojas Perez Ana</option>
                </select>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>

        <!-- Tabla de Especialidades -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Activar</th>
                    <th>Servicio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>Odontología</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Medicina General</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Cardiología</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Psicología</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Reumatología</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
