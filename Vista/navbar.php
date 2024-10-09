<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../imagenes/clinica-logo.jpg" alt="Bootstrap" width="30" height="24">
    </a>
    <a class="navbar-brand text-orange" href="#">Sistema de Policlínico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Mantenimiento -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mantenimientoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cogs"></i> Mantenimiento
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="mantenimientoDropdown">
                        <li><a class="dropdown-item" href="mantenimiento_usuarios.php">Usuarios</a></li>
                        <li><a class="dropdown-item" href="asignacion_roles.php">Asignación de Roles</a></li>
                    </ul>
                </li>

                <!-- Asignación -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="asignacionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-wrench"></i> Asignación
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="asignacionDropdown">
                        <li><a class="dropdown-item" href="asignacion_medicos.php">Asignación de Médicos</a></li>
                        <li><a class="dropdown-item" href="asignacion_horarios.php">Asignación de Horarios</a></li>
                    </ul>
                </li>

                <!-- Consultas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="consultasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-file-medical"></i> Consultas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="consultasDropdown">
                        <li><a class="dropdown-item" href="calendario_citas.php">Calendario de Citas</a></li>
                        <li><a class="dropdown-item" href="detalle_historial_clinico.php">Generar Historial Clínico</a></li>
                        <li><a class="dropdown-item" href="consultas.php">Consultas Médicas</a></li>
                    </ul>
                </li>

                <!-- Reportes -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="reportesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-chart-bar"></i> Reportes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="reportesDropdown">
                        <li><a class="dropdown-item" href="reportes.php">Exportar Reportes</a></li>
                        <li><a class="dropdown-item" href="seleccionar_especialidades.php">Seleccionar Especialidades</a></li>
                        <li><a class="dropdown-item" href="seleccionar_pacientes.php">Seleccionar Pacientes</a></li>
                    </ul>
                    
                </li>

                <!-- Registros -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="otrosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i> Registros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="otrosDropdown">
                        <li><a class="dropdown-item" href="registro_atencion.php">Registro de Atención</a></li>
                        <li><a class="dropdown-item" href="registro_pagos.php">Registro de Pagos</a></li>
                        <li><a class="dropdown-item" href="registro_signos_vitales.php">Registro de Signos Vitales</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Usuario y Logout -->
            <ul class="navbar-nav ml-auto">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shield-alt"></i> ADMINISTRADOR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="login.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .text-orange {
        color: #FF5733 !important;
    }
</style>

<!-- Enlace de FontAwesome para los iconos -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
