<?php
include 'navbar_selector.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Medicamentos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container mt-4 contenido-con-navbar">
        <h1>Control de Medicamentos</h1>

        <!-- Buscador de Medicamentos -->
        <div class="mb-3">
            <input type="text" id="search" class="form-control" placeholder="Buscar medicamento...">
        </div>

        <!-- Lista de Medicamentos -->
        <ul class="list-group" id="medicamentos-list">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Paracetamol
                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#medicamentoModal1">Ver Información</button>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Ibuprofeno
                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#medicamentoModal2">Ver Información</button>
            </li>
            <!-- Puedes agregar más medicamentos aquí -->
        </ul>

        <!-- Modal de Información del Medicamento (Ejemplo para el primer medicamento) -->
        <div class="modal fade" id="medicamentoModal1" tabindex="-1" aria-labelledby="medicamentoModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="medicamentoModalLabel1">Información del Medicamento: Paracetamol</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nombre:</strong> Paracetamol</p>
                        <p><strong>Dosis:</strong> 500mg</p>
                        <p><strong>Frecuencia:</strong> Cada 8 horas</p>
                        <p><strong>Indicaciones:</strong> Para aliviar el dolor y reducir la fiebre.</p>
                        <p><strong>Contraindicaciones:</strong> No tomar más de 4g en 24 horas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de Información del Medicamento (Ejemplo para el segundo medicamento) -->
        <div class="modal fade" id="medicamentoModal2" tabindex="-1" aria-labelledby="medicamentoModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="medicamentoModalLabel2">Información del Medicamento: Ibuprofeno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nombre:</strong> Ibuprofeno</p>
                        <p><strong>Dosis:</strong> 200mg</p>
                        <p><strong>Frecuencia:</strong> Cada 6 horas</p>
                        <p><strong>Indicaciones:</strong> Para aliviar el dolor, la inflamación y reducir la fiebre.</p>
                        <p><strong>Contraindicaciones:</strong> No tomar en caso de úlceras estomacales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función de búsqueda de medicamentos
        document.getElementById('search').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let items = document.querySelectorAll('#medicamentos-list .list-group-item');

            items.forEach(function(item) {
                let text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
