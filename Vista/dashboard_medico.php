<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Médico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Enlace al archivo CSS -->
    <!-- Fuente Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <!-- Saludo, Notificaciones y resumen -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h1>¡Bienvenido, Dr. <?php echo $_SESSION['username']; ?>!</h1>
                <p>Aquí puede gestionar sus consultas y ver pacientes.</p>
            </div>
            <div class="col-md-4 text-end">
                <!-- Icono de Notificaciones -->
                <button type="button" class="btn btn-light position-relative" data-bs-toggle="modal" data-bs-target="#notificacionesModal">
                    <i class="fas fa-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </button>
            </div>
        </div>

        <!-- Modal de Notificaciones -->
        <div class="modal fade" id="notificacionesModal" tabindex="-1" aria-labelledby="notificacionesLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="notificacionesLabel">Notificaciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>Cita con el paciente Juan Pérez a las 10:00 AM</li>
                  <li>Cita cancelada con la paciente María García</li>
                  <li>Nueva cita programada con Luis García</li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Nueva sección para próximas citas -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Próximas Citas</h5>
                        <ul>
                            <li>03/10/2024 - María López con Dr. Martínez</li>
                            <li>04/10/2024 - Pedro Sánchez con Dr. Rivera</li>
                            <li>05/10/2024 - Rosa Gómez con Dr. García</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atajos a funcionalidades -->
        <div class="row mb-4">
            <!-- Botón de Registrar Paciente -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-user-plus fa-2x mb-2"></i>
                        <h5 class="card-title">Registrar Paciente</h5>
                        <!-- Botón que activa el modal -->
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#registroPacienteModal">Ir</button>
                    </div>
                </div>
            </div>

            <!-- Nuevo atajo a Control de Medicamentos -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <!-- Icono de Medicamentos -->
                        <i class="fas fa-pills fa-2x mb-2"></i>
                        <h5 class="card-title">Control de Medicamentos</h5>
                        <a href="control_medicamentos.php" class="btn">Ir</a>
                    </div>
                </div>
            </div>


            <!-- Modal de Opciones para Registrar Paciente -->
            <div class="modal fade" id="registroPacienteModal" tabindex="-1" aria-labelledby="registroPacienteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="registroPacienteModalLabel">Registrar Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Seleccione una opción para continuar:</p>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a href="registro_atencion.php" class="btn btn-primary w-100">Registro de Atención</a>
                      </li>
                      <li class="list-group-item">
                        <a href="registro_signos_vitales.php" class="btn btn-primary w-100">Registro de Signos Vitales</a>
                      </li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Otras funcionalidades -->
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-book-medical fa-2x mb-2"></i>
                        <h5 class="card-title">Ver Historial</h5>
                        <a href="detalle_historial_clinico.php" class="btn">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-calendar-alt fa-2x mb-2"></i>
                        <h5 class="card-title">Calendario de Citas</h5>
                        <a href="calendario_citas.php" class="btn">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-pie fa-2x mb-2"></i>
                        <h5 class="card-title">Resumen de Reportes</h5>
                        <a href="reportes.php" class="btn">Ir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos e indicadores -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes Atendidos (Semana)</h5>
                        <canvas id="graficoPacientes"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Consultas por Especialidad</h5>
                        <canvas id="graficoEspecialidades"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for graphics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de pacientes atendidos (semana)
        var ctx1 = document.getElementById('graficoPacientes').getContext('2d');
        var graficoPacientes = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie'],
                datasets: [{
                    label: 'Pacientes Atendidos',
                    data: [5, 8, 3, 7, 6],
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

        // Gráfico de distribución de citas por especialidad
        var ctx2 = document.getElementById('graficoEspecialidades').getContext('2d');
        var graficoEspecialidades = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Cardiología', 'Dermatología', 'Pediatría', 'Neurología'],
                datasets: [{
                    label: 'Especialidades',
                    data: [10, 15, 8, 5],
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

