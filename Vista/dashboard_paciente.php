<!-- dashboard_paciente.php -->
<?php
include 'navbar_selector.php';

// Verificar si el usuario es 'Paciente'
if ($_SESSION['role'] != 'Paciente') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Paciente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <!-- Saludo Personalizado -->
        <h1>¡Hola, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Bienvenido a tu espacio de paciente.</p>

        <!-- Resumen de Citas -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Próximas Citas</h5>
                        <ul id="lista-citas" class="list-group">
                            <!-- Las citas se agregarán aquí dinámicamente -->
                        </ul>
                        <a href="mis_citas.php" class="btn btn-primary mt-3">Ver todas las citas</a>
                    </div>
                </div>
            </div>

            <!-- Reservar Nueva Cita -->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-calendar-plus fa-2x mb-2"></i>
                        <h5 class="card-title">Reservar Nueva Cita</h5>
                        <!-- Botón para abrir el modal -->
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#reservarCitaModal">Reservar Cita</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Seguimiento de Citas -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tu Seguimiento de Citas</h5>
                        <canvas id="graficoCitas"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Noticias de la Clínica -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Noticias de la Clínica</h5>
                        <ul>
                            <li>Nueva campaña de vacunación disponible a partir del 15 de octubre.</li>
                            <li>Horarios extendidos en la sección de cardiología los días martes.</li>
                            <li>¡Ahora puedes reservar citas con nuestros nutricionistas!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frase Motivacional -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <div class="alert alert-info">
                    <h5 class="mb-0">"La salud es la mayor posesión. Cuida de ella hoy para un mejor mañana."</h5>
                </div>
            </div>
        </div>

        <!-- Modal para reservar una nueva cita -->
        <div class="modal fade" id="reservarCitaModal" tabindex="-1" aria-labelledby="reservarCitaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reservarCitaModalLabel">Reservar Nueva Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario de reserva de cita -->
                        <form id="form-reservar-cita">
                            <div class="mb-3">
                                <label for="fecha-cita" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha-cita" required>
                            </div>
                            <div class="mb-3">
                                <label for="hora-cita" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="hora-cita" required>
                            </div>
                            <div class="mb-3">
                                <label for="medico-cita" class="form-label">Médico</label>
                                <select id="medico-cita" class="form-select" required>
                                    <option selected disabled>Seleccione un médico</option>
                                    <option value="Dr. Gómez">Dr. Gómez</option>
                                    <option value="Dra. Martínez">Dra. Martínez</option>
                                    <!-- Más opciones de médicos -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Reservar</button>
                        </form>
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
        // Simulando la lista de citas
        let citas = [];

        // Función para agregar una cita a la lista
        function agregarCita(fecha, hora, medico) {
            citas.push({ fecha, hora, medico });
            mostrarCitas();
            actualizarGrafico();
        }

        // Función para mostrar las citas en la lista
        function mostrarCitas() {
            const listaCitas = document.getElementById('lista-citas');
            listaCitas.innerHTML = ''; // Limpiar la lista
            citas.forEach((cita) => {
                const li = document.createElement('li');
                li.classList.add('list-group-item');
                li.textContent = `${cita.fecha} - ${cita.hora} - ${cita.medico}`;
                listaCitas.appendChild(li);
            });
        }

        // Configuración inicial del gráfico
        const ctx = document.getElementById('graficoCitas').getContext('2d');
        const graficoCitas = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [], // Fechas de las citas
                datasets: [{
                    label: 'Citas Reservadas',
                    data: [],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: true
                }]
            },
            options: {
                scales: {
                    x: { beginAtZero: true },
                    y: { beginAtZero: true }
                }
            }
        });

        // Actualizar gráfico de citas
        function actualizarGrafico() {
            graficoCitas.data.labels = citas.map(cita => cita.fecha);
            graficoCitas.data.datasets[0].data = citas.map((_, index) => index + 1);
            graficoCitas.update();
        }

        // Evento para manejar el envío del formulario de reserva
        document.getElementById('form-reservar-cita').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Obtener los valores del formulario
            const fecha = document.getElementById('fecha-cita').value;
            const hora = document.getElementById('hora-cita').value;
            const medico = document.getElementById('medico-cita').value;

            // Agregar la cita a la lista
            agregarCita(fecha, hora, medico);

            // Cerrar el modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('reservarCitaModal'));
            modal.hide();
        });
    </script>
</body>
</html>
