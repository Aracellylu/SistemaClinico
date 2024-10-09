<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Signos Vitales</title>

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
        .form-group {
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="container table-container contenido-con-navbar">
        <!-- Registro de Signos Vitales -->
        <h2>Registro de Signos Vitales</h2>
        
        <!-- Datos de Sede -->
        <h4>Datos de Sede</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="nombreSede" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreSede">
            </div>
            <div class="col">
                <label for="rucSede" class="form-label">RUC</label>
                <input type="text" class="form-control" id="rucSede">
            </div>
            <div class="col">
                <label for="direccionSede" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccionSede">
            </div>
        </div>

        <!-- Detalle del Paciente -->
        <h4>Detalle del Paciente</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="nombrePaciente" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente">
            </div>
            <div class="col">
                <label for="historiaClinica" class="form-label">Nº Historia Clínica</label>
                <input type="text" class="form-control" id="historiaClinica">
            </div>
            <div class="col">
                <label for="documentoPaciente" class="form-label">Nº Documento</label>
                <input type="text" class="form-control" id="documentoPaciente">
            </div>
            <div class="col">
                <label for="servicioPaciente" class="form-label">Servicio</label>
                <input type="text" class="form-control" id="servicioPaciente">
            </div>
            <div class="col">
                <label for="medicoPaciente" class="form-label">Nombre del Médico</label>
                <input type="text" class="form-control" id="medicoPaciente">
            </div>
            <div class="col mt-4">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>

        <!-- Detalle de Resultados -->
        <h4>Detalle de Resultados</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="pArterial" class="form-label">P. Arterial</label>
                <input type="text" class="form-control" id="pArterial">
            </div>
            <div class="col">
                <label for="fRespiratorio" class="form-label">F. Respiratorio</label>
                <input type="text" class="form-control" id="fRespiratorio">
            </div>
            <div class="col">
                <label for="fCardiaca" class="form-label">F. Cardíaca</label>
                <input type="text" class="form-control" id="fCardiaca">
            </div>
            <div class="col">
                <label for="pesoPaciente" class="form-label">Peso</label>
                <input type="text" class="form-control" id="pesoPaciente">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="temperaturaPaciente" class="form-label">Temperatura</label>
                <input type="text" class="form-control" id="temperaturaPaciente">
            </div>
            <div class="col">
                <label for="saturacionPaciente" class="form-label">Saturación</label>
                <input type="text" class="form-control" id="saturacionPaciente">
            </div>
            <div class="col">
                <label for="tallaPaciente" class="form-label">Talla</label>
                <input type="text" class="form-control" id="tallaPaciente">
            </div>
            <div class="col">
                <label for="imcPaciente" class="form-label">IMC</label>
                <select class="form-select" id="imcPaciente">
                    <option value="normal">Normal</option>
                    <option value="sobrepeso">Sobrepeso</option>
                    <option value="obesidad">Obesidad</option>
                </select>
            </div>
            <div class="col mt-4">
                <button class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
