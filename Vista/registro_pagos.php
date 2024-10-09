<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pagos</title>

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
        <!-- Registro de Pago -->
        <h2>Registro de Pagos</h2>
        <div class="row mb-3">
            <div class="col">
                <label for="tipoDoc" class="form-label">Tipo Documento</label>
                <select class="form-select" id="tipoDoc">
                    <option value="dni">DNI</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="col">
                <label for="fechaPago" class="form-label">Fecha de Pago</label>
                <input type="date" class="form-control" id="fechaPago">
            </div>
            <div class="col">
                <button class="btn btn-primary mt-4">Imprimir y Terminar Pago</button>
            </div>
        </div>

        <!-- Detalle del Paciente -->
        <h4>Detalle de Paciente</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="numDoc" class="form-label">Nº de Documento</label>
                <input type="text" class="form-control" id="numDoc">
            </div>
            <div class="col">
                <label for="apaterno" class="form-label">A. Paterno</label>
                <input type="text" class="form-control" id="apaterno">
            </div>
            <div class="col">
                <label for="amaterno" class="form-label">A. Materno</label>
                <input type="text" class="form-control" id="amaterno">
            </div>
            <div class="col">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
            <div class="col">
                <label for="estadoCivil" class="form-label">Estado Civil</label>
                <select class="form-select" id="estadoCivil">
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                </select>
            </div>
            <div class="col">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono">
            </div>
            <div class="col">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion">
            </div>
        </div>

        <!-- Detalle del Servicio -->
        <h4>Detalle de Servicio</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="servicio" class="form-label">Servicio</label>
                <input type="text" class="form-control" id="servicio">
            </div>
            <div class="col">
                <label for="costo" class="form-label">Costo</label>
                <input type="text" class="form-control" id="costo">
            </div>
            <div class="col">
                <button class="btn btn-primary mt-4">Buscar</button>
            </div>
        </div>

        <!-- Detalle de Atención -->
        <h4>Detalle de Atención</h4>
        <div class="row mb-3">
            <div class="col">
                <label for="medico" class="form-label">Médico</label>
                <input type="text" class="form-control" id="medico">
            </div>
            <div class="col">
                <label for="diaAtencion" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="diaAtencion">
            </div>
            <div class="col">
                <label for="horaAtencion" class="form-label">Hora</label>
                <input type="time" class="form-control" id="horaAtencion">
            </div>
            <div class="col">
                <button class="btn btn-primary mt-4">Agregar</button>
            </div>
        </div>

        <!-- Tabla de Servicios -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Médico</th>
                    <th>Paciente</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cardiología</td>
                    <td>Beatriz Merino</td>
                    <td>Marcos Quintana</td>
                    <td>40</td>
                    <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
            </tbody>
        </table>

        <!-- Totales -->
        <div class="row mt-4">
            <div class="col">
                <label for="subtotal" class="form-label">Sub Total</label>
                <input type="text" class="form-control" id="subtotal" readonly>
            </div>
            <div class="col">
                <label for="igv" class="form-label">IGV</label>
                <input type="text" class="form-control" id="igv" readonly>
            </div>
            <div class="col">
                <label for="total" class="form-label">Total</label>
                <input type="text" class="form-control" id="total" readonly>
            </div>
            <div class="col">
                <button class="btn btn-primary mt-4">Calcular</button>
            </div>
        </div>

        <!-- Cambio -->
        <div class="row mt-3">
            <div class="col">
                <label for="montoPago" class="form-label">Monto Pago</label>
                <input type="text" class="form-control" id="montoPago">
            </div>
            <div class="col">
                <label for="cambio" class="form-label">Cambio</label>
                <input type="text" class="form-control" id="cambio" readonly>
            </div>
            <div class="col">
                <button class="btn btn-primary mt-4">Cambiar</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
