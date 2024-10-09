<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>

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
            <input type="text" class="form-control form-control-inline w-25" placeholder="Nº Historia Clínica">
            <input type="text" class="form-control form-control-inline w-25" placeholder="Nº Documento">
            <input type="text" class="form-control form-control-inline w-25" placeholder="Nombre">
            <div>
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>

        <!-- Tabla de Consultas -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nº de HC</th>
                    <th>Nº de Doc</th>
                    <th>Paciente</th>
                    <th>Servicio</th>
                    <th>Médico</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234</td>
                    <td>12345678</td>
                    <td>Fiorella Montes</td>
                    <td>Oftalmología</td>
                    <td>David Mendoza</td>
                    <td>30</td>
                    <td>20/05/22</td>
                </tr>
                <tr>
                    <td>5678</td>
                    <td>23456789</td>
                    <td>Ana Robles</td>
                    <td>Dermatología</td>
                    <td>Beatriz Merino</td>
                    <td>40</td>
                    <td>20/05/22</td>
                </tr>
                <tr>
                    <td>9012</td>
                    <td>34567890</td>
                    <td>Carla Aguirre</td>
                    <td>Geriatría</td>
                    <td>Leo Bravo</td>
                    <td>50</td>
                    <td>20/05/22</td>
                </tr>
                <tr>
                    <td>3456</td>
                    <td>45678901</td>
                    <td>Ernesto Arias</td>
                    <td>Ginecología</td>
                    <td>Milagros Sifuentes</td>
                    <td>80</td>
                    <td>20/05/22</td>
                </tr>
                <tr>
                    <td>7890</td>
                    <td>56789012</td>
                    <td>Gonzalo Lozano</td>
                    <td>Cardiología</td>
                    <td>Jack Galvez</td>
                    <td>70</td>
                    <td>20/05/22</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
