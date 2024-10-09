<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Especialidades</title>

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
        <h2>Seleccionar Especialidades</h2>

        <!-- Barra de búsqueda -->
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
        </div>

        <!-- Tabla de Especialidades -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Servicio</th>
                    <th>Médico</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Oftalmología</td>
                    <td>Vilma Moura</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Cardiología</td>
                    <td>Beatriz Solis</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Medicina General</td>
                    <td>Antoni Cardenas</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Geriatría</td>
                    <td>Lionel Flores</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Psicología</td>
                    <td>Juan Cáceres</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>Dermatología</td>
                    <td>Angela Cruz</td>
                    <td>50</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
