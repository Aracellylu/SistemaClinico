<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Citas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-container {
            margin-top: 50px;
        }
        .btn-custom {
            margin-bottom: 20px;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 10px;
            margin-top: 20px;
        }
        .calendar-day {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            padding: 20px;
            height: 100px;
            background-color: #f9f9f9;
            cursor: pointer;
        }
        .calendar-day:hover {
            background-color: #e0e0e0;
        }
        .calendar-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .calendar-header button {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="container table-container contenido-con-navbar">
        <h2 class="calendar-header">Calendario de Citas</h2>

        <!-- Botones de acceso rápido -->
        <div class="row mb-3">
            <div class="col">
                <button class="btn btn-primary">Pacientes</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Servicios</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Citas médicas</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Doctores</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Usuarios</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Historias clínicas</button>
            </div>
        </div>

        <!-- Calendario mensual -->
        <div class="calendar-grid">
            <div class="calendar-day">Lunes 1</div>
            <div class="calendar-day">Martes 2</div>
            <div class="calendar-day">Miércoles 3</div>
            <div class="calendar-day">Jueves 4</div>
            <div class="calendar-day">Viernes 5</div>
            <div class="calendar-day">Sábado 6</div>
            <div class="calendar-day">Domingo 7</div>

            <div class="calendar-day">Lunes 8</div>
            <div class="calendar-day">Martes 9</div>
            <div class="calendar-day">Miércoles 10</div>
            <div class="calendar-day">Jueves 11</div>
            <div class="calendar-day">Viernes 12</div>
            <div class="calendar-day">Sábado 13</div>
            <div class="calendar-day">Domingo 14</div>

            <div class="calendar-day">Lunes 15</div>
            <div class="calendar-day">Martes 16</div>
            <div class="calendar-day">Miércoles 17</div>
            <div class="calendar-day">Jueves 18</div>
            <div class="calendar-day">Viernes 19</div>
            <div class="calendar-day">Sábado 20</div>
            <div class="calendar-day">Domingo 21</div>

            <div class="calendar-day">Lunes 22</div>
            <div class="calendar-day">Martes 23</div>
            <div class="calendar-day">Miércoles 24</div>
            <div class="calendar-day">Jueves 25</div>
            <div class="calendar-day">Viernes 26</div>
            <div class="calendar-day">Sábado 27</div>
            <div class="calendar-day">Domingo 28</div>

            <div class="calendar-day">Lunes 29</div>
            <div class="calendar-day">Martes 30</div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
