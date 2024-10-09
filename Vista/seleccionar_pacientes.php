<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Pacientes</title>

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
        <h2>Seleccionar Pacientes</h2>

        <!-- Barra de búsqueda -->
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
        </div>

        <!-- Tabla de Pacientes -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Nº Turno</th>
                    <th>Nº HC</th>
                    <th>Paciente</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>101</td>
                    <td>1234</td>
                    <td>Ernesto Cruz</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>102</td>
                    <td>5678</td>
                    <td>Luis Jimenez</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>103</td>
                    <td>9012</td>
                    <td>Cinthya Quispe</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>104</td>
                    <td>3456</td>
                    <td>Juan Infante</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>105</td>
                    <td>7890</td>
                    <td>Pamela Gomez</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-sm">Seleccionar</button></td>
                    <td>106</td>
                    <td>1267</td>
                    <td>Sergio Estrada</td>
                    <td>25/06/22</td>
                    <td>En Espera</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
