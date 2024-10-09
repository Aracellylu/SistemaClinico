<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Atención</title>

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
        <!-- Registro de Atención -->
        <h2>Registro de Atención</h2>
        
        <!-- Datos y Signos Vitales del Paciente -->
        <h4>Datos y Signos Vitales del Paciente</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="historiaClinica" class="form-label">Nº Historia Clínica</label>
                <input type="text" class="form-control" id="historiaClinica">
            </div>
            <div class="col">
                <label for="nombrePaciente" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente">
            </div>
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
                <label for="nivelPeso" class="form-label">Nivel de Peso</label>
                <select class="form-select" id="nivelPeso">
                    <option value="normal">Normal</option>
                    <option value="sobrepeso">Sobrepeso</option>
                    <option value="obesidad">Obesidad</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="fechaNacimiento" class="form-label">F. de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento">
            </div>
            <div class="col">
                <label for="edadPaciente" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edadPaciente">
            </div>
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
                <label for="pesoPaciente" class="form-label">Peso</label>
                <input type="text" class="form-control" id="pesoPaciente">
            </div>
            <div class="col mt-4">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>

        <!-- Motivo de Consulta -->
        <h4>Motivo de Consulta</h4>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" id="motivoConsulta" rows="3" placeholder="Contenido"></textarea>
            </div>
        </div>

        <!-- Diagnóstico -->
        <h4>Diagnóstico</h4>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" id="diagnostico" rows="3" placeholder="Contenido"></textarea>
            </div>
        </div>

        <!-- Examen Auxiliar -->
        <h4>Examen Auxiliar</h4>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" id="examenAuxiliar" rows="3" placeholder="Contenido"></textarea>
            </div>
        </div>

        <!-- Tratamiento -->
        <h4>Tratamiento</h4>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" id="tratamiento" rows="3" placeholder="Contenido"></textarea>
            </div>
        </div>

        <!-- Tabla de Resultados -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Peso</th>
                    <th>Talla</th>
                    <th>F. Cardíaca</th>
                    <th>F. Respiratoria</th>
                    <th>Servicio</th>
                    <th>Médico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20/05/22</td>
                    <td>55</td>
                    <td>1.70</td>
                    <td>40</td>
                    <td>45</td>
                    <td>Oftalmología</td>
                    <td>Hayde Morales</td>
                    <td><button class="btn btn-primary btn-sm">Detalle</button></td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-success mt-3">Guardar Cambios</button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
