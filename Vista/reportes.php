<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>

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
            <input type="text" class="form-control form-control-inline w-20" placeholder="Fecha Inicio">
            <input type="text" class="form-control form-control-inline w-20" placeholder="Fecha Fin">
            <button class="btn btn-primary">Buscar</button>
        </div>

        <!-- Botones de Exportación -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <button class="btn btn-outline-success">Excel</button>
                <button class="btn btn-outline-danger">PDF</button>
                <button class="btn btn-outline-secondary">Print</button>
            </div>
            <input type="text" class="form-control form-control-inline w-25" placeholder="Buscar">
        </div>

        <!-- Tabla de Reportes -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>A. Pat.</th>
                    <th>A. Mat.</th>
                    <th>F. Nac.</th>
                    <th>Sexo</th>
                    <th>E. Civil</th>
                    <th>Nº Doc.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Estrella</td>
                    <td>Sanchez</td>
                    <td>Sanchez</td>
                    <td>12/04/1990</td>
                    <td>Femenino</td>
                    <td>Soltero</td>
                    <td>12345678</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dayana</td>
                    <td>Guardia</td>
                    <td>Guardia</td>
                    <td>02/06/1994</td>
                    <td>Femenino</td>
                    <td>Viudo</td>
                    <td>23456789</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Samuel</td>
                    <td>Solis</td>
                    <td>Solis</td>
                    <td>22/11/1995</td>
                    <td>Masculino</td>
                    <td>Casado</td>
                    <td>34567890</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bryan</td>
                    <td>Montes</td>
                    <td>Montes</td>
                    <td>11/10/1993</td>
                    <td>Masculino</td>
                    <td>Casado</td>
                    <td>45678901</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Luis</td>
                    <td>Quispe</td>
                    <td>Quispe</td>
                    <td>08/01/1993</td>
                    <td>Masculino</td>
                    <td>Casado</td>
                    <td>56789012</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
