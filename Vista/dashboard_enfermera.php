<?php
include 'navbar_selector.php';
if ($_SESSION['role'] != 'Enfermera') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Enfermera</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <h1>Bienvenida Enfermera, <?php echo $_SESSION['username']; ?></h1>
        <p>Aquí puede gestionar los signos vitales y el estado de los pacientes.</p>

        <!-- Resumen Diario -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes Atendidos Hoy</h5>
                        <p class="card-text"><strong>8</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Citas Próximas</h5>
                        <p class="card-text"><strong>5</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Medicamentos Administrados</h5>
                        <p class="card-text"><strong>12</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atajos a funcionalidades clave -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-heartbeat fa-2x mb-2"></i>
                        <h5 class="card-title">Registrar Signos Vitales</h5>
                        <a href="registro_signos_vitales.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-pills fa-2x mb-2"></i>
                        <h5 class="card-title">Control de Medicamentos</h5>
                        <a href="control_medicamentos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-book-medical fa-2x mb-2"></i>
                        <h5 class="card-title">Ver Historial</h5>
                        <a href="detalle_historial_clinico.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos e indicadores -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Distribución de Pacientes por Estado</h5>
                        <canvas id="graficoPacientesEstado"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes Atendidos por Día</h5>
                        <canvas id="graficoPacientesDia"></canvas>
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
                            <li>Próxima cita de paciente Juan Pérez a las 10:00 AM.</li>
                            <li>Administrar medicamento a María García.</li>
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
        // Gráfico de distribución de pacientes por estado
        var ctx1 = document.getElementById('graficoPacientesEstado').getContext('2d');
        var graficoPacientesEstado = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Estable', 'Crítico', 'Recuperando'],
                datasets: [{
                    data: [50, 20, 30], // Datos de ejemplo
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 206, 86, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });

        // Gráfico de pacientes atendidos por día
        var ctx2 = document.getElementById('graficoPacientesDia').getContext('2d');
        var graficoPacientesDia = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie'],
                datasets: [{
                    label: 'Pacientes Atendidos',
                    data: [5, 8, 6, 7, 4], // Datos de ejemplo
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
    </script>
</body>
</html>
