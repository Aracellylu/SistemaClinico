<?php
include 'navbar_selector.php';
if ($_SESSION['role'] != 'Cajero') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cajero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <h1>Bienvenido Cajero, <?php echo $_SESSION['username']; ?></h1>
        <p>Aquí puede gestionar los pagos de los pacientes.</p>

        <!-- Resumen Diario -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Cobrado Hoy</h5>
                        <p class="card-text"><strong>S/. 1,200.00</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Transacciones de Hoy</h5>
                        <p class="card-text"><strong>15</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Pagos Pendientes</h5>
                        <p class="card-text"><strong>3</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atajos a funcionalidades clave -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-cash-register fa-2x mb-2"></i>
                        <h5 class="card-title">Registrar Pago</h5>
                        <a href="registro_pagos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-history fa-2x mb-2"></i>
                        <h5 class="card-title">Historial de Pagos</h5>
                        <a href="historial_pagos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-file-invoice fa-2x mb-2"></i>
                        <h5 class="card-title">Emitir Recibos</h5>
                        <a href="emitir_recibos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-line fa-2x mb-2"></i>
                        <h5 class="card-title">Generar Reportes</h5>
                        <a href="reportes.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos e indicadores -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ingresos Diarios (Última Semana)</h5>
                        <canvas id="graficoIngresos"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tipos de Transacciones</h5>
                        <canvas id="graficoTransacciones"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificaciones -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notificaciones</h5>
                        <ul>
                            <li>Pago pendiente del paciente Juan Pérez.</li>
                            <li>Recibo emitido para María García.</li>
                            <!-- Más notificaciones aquí -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de Ingresos Diarios
        var ctx1 = document.getElementById('graficoIngresos').getContext('2d');
        var graficoIngresos = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                datasets: [{
                    label: 'Ingresos (S/.)',
                    data: [1200, 950, 1300, 1450, 1600, 900, 1100], // Datos de ejemplo
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Tipos de Transacciones
        var ctx2 = document.getElementById('graficoTransacciones').getContext('2d');
        var graficoTransacciones = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Consultas', 'Procedimientos', 'Medicamentos', 'Otros'],
                datasets: [{
                    data: [50, 30, 10, 10], // Datos de ejemplo
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>
