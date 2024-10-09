<?php
include 'navbar_selector.php';

// Verifica si el usuario está autenticado y tiene el rol correspondiente
if (!isset($_SESSION['username']) || !in_array($_SESSION['role'], ['Médico', 'Enfermera', 'Administrador'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Historial Clínico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <h1>Historial Clínico del Paciente</h1>

        <!-- Seleccionar Paciente -->
        <div class="mb-4">
            <label for="select-paciente" class="form-label">Seleccionar Paciente:</label>
            <select id="select-paciente" class="form-select">
                <option selected disabled>Seleccione un paciente</option>
                <option value="1">Juan Pérez</option>
                <option value="2">María García</option>
            </select>
        </div>

        <!-- Detalle del Historial Clínico -->
        <div id="historial-clinico" class="d-none">
            <h2>Historial de: <span id="paciente-nombre"></span></h2>
            <table class="table table-bordered">
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
                <tbody id="historial-body">
                    <!-- Datos de ejemplo, se llenarán dinámicamente -->
                </tbody>
            </table>
        </div>

        <!-- Modal para mostrar detalles del historial clínico -->
        <div class="modal fade" id="detalleModal" tabindex="-1" aria-labelledby="detalleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detalleModalLabel">Detalle del Historial Clínico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Información detallada (simulada) -->
                        <h5>Datos y Signos Vitales</h5>
                        <p><strong>P. Arterial:</strong> 120/80</p>
                        <p><strong>F. Respiratoria:</strong> 16</p>
                        <p><strong>F. Cardíaca:</strong> 72</p>
                        <p><strong>Temperatura:</strong> 37°C</p>
                        <p><strong>Talla:</strong> 1.75 m</p>
                        <p><strong>Peso:</strong> 70 kg</p>
                        
                        <h5>Motivo de Consulta</h5>
                        <p>Dolor de cabeza persistente y mareos.</p>
                        
                        <h5>Diagnóstico</h5>
                        <p>Posible migraña.</p>
                        
                        <h5>Examen Auxiliar</h5>
                        <p>Se solicita resonancia magnética.</p>
                        
                        <h5>Tratamiento</h5>
                        <p>Paracetamol 500 mg cada 8 horas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Datos de ejemplo
        const historiales = {
            1: [
                { fecha: '2024-09-15', peso: '70', talla: '1.75', fCardiaca: '72', fRespiratoria: '16', servicio: 'Neurología', medico: 'Dr. Gómez' }
            ],
            2: [
                { fecha: '2024-08-20', peso: '65', talla: '1.68', fCardiaca: '80', fRespiratoria: '18', servicio: 'Cardiología', medico: 'Dr. Mendoza' }
            ]
        };

        // Mostrar el historial clínico del paciente seleccionado
        document.getElementById('select-paciente').addEventListener('change', function() {
            const pacienteId = this.value;
            const pacienteNombre = this.options[this.selectedIndex].text;

            // Actualizar el nombre del paciente
            document.getElementById('paciente-nombre').innerText = pacienteNombre;

            // Limpiar el historial anterior
            const historialBody = document.getElementById('historial-body');
            historialBody.innerHTML = '';

            // Obtener y mostrar el historial del paciente seleccionado
            if (historiales[pacienteId]) {
                historiales[pacienteId].forEach((historial, index) => {
                    const row = `
                        <tr>
                            <td>${historial.fecha}</td>
                            <td>${historial.peso}</td>
                            <td>${historial.talla}</td>
                            <td>${historial.fCardiaca}</td>
                            <td>${historial.fRespiratoria}</td>
                            <td>${historial.servicio}</td>
                            <td>${historial.medico}</td>
                            <td><button class="btn btn-info btn-sm" onclick="verDetalle(${pacienteId}, ${index})">Detalle</button></td>
                        </tr>
                    `;
                    historialBody.innerHTML += row;
                });

                // Mostrar la sección del historial clínico
                document.getElementById('historial-clinico').classList.remove('d-none');
            } else {
                // Ocultar la tabla si no hay datos para el paciente
                document.getElementById('historial-clinico').classList.add('d-none');
            }
        });

        // Mostrar detalle del historial clínico en el modal
        function verDetalle(pacienteId, index) {
            // Aquí puedes añadir lógica para cargar datos específicos del historial
            const historial = historiales[pacienteId][index];

            // Mostrar el modal
            const modal = new bootstrap.Modal(document.getElementById('detalleModal'));
            modal.show();
        }
    </script>
</body>
</html>
