<!-- Navbar Médico -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="sidebar bg-light p-3" style="width: 250px;">
    <div class="sidebar-sticky">
        <a class="navbar-brand" href="dashboard_medico.php">
            <img src="../imagenes/clinica-logo.jpg" alt="Logo" width="30" height="24">
            <span class="text-orange">Sistema de Policlínico</span>
        </a>

        <ul class="nav flex-column mt-3">
            <!-- Consultas -->
            <li class="nav-item">
                <a class="nav-link" href="#consultasSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-file-medical"></i> Consultas
                </a>
                <ul class="collapse list-unstyled" id="consultasSubmenu">
                    <li><a class="nav-link" href="calendario_citas.php">Calendario de Citas</a></li>
                    <li><a class="nav-link" href="detalle_historial_clinico.php">Historial Clínico</a></li>
                    <li><a class="nav-link" href="consultas.php">Consultas Médicas</a></li>
                </ul>
            </li>

            <!-- Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="#reportesSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-chart-bar"></i> Reportes
                </a>
                <ul class="collapse list-unstyled" id="reportesSubmenu">
                    <li><a class="nav-link" href="reportes.php">Exportar Reportes</a></li>
                    <li><a class="nav-link" href="seleccionar_especialidades.php">Seleccionar Especialidades</a></li>
                    <li><a class="nav-link" href="seleccionar_pacientes.php">Seleccionar Pacientes</a></li>
                </ul>
            </li>

            <!-- Registros -->
            <li class="nav-item">
                <a class="nav-link" href="#registrosSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-clipboard-list"></i> Registros
                </a>
                <ul class="collapse list-unstyled" id="registrosSubmenu">
                    <li><a class="nav-link" href="registro_atencion.php">Registro de Atención</a></li>
                    <li><a class="nav-link" href="registro_signos_vitales.php">Registro de Signos Vitales</a></li>
                </ul>
            </li>

            <!-- Usuario y Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-md"></i> Médico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="login.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Estilos adicionales -->
<style>
  .sidebar {
      height: 100vh; /* Ocupa toda la altura de la ventana */
      width: 250px; /* Ancho fijo */
      position: fixed; /* Fija la barra a la izquierda */
      top: 0;
      left: 0;
      background-color: #f8f9fa; /* Fondo claro */
      padding-top: 20px;
      z-index: 1; /* Asegura que la barra esté por encima del contenido */
      overflow-y: auto; /* Permite scroll si el contenido de la barra es muy largo */
  }

  .text-orange {
      color: #FF5733 !important; /* Color del texto */
  }
  
  /* Quitar el estilo de puntos en listas anidadas */
  .list-unstyled {
      list-style: none;
      padding-left: 10px;
  }
</style>

<!-- Enlace de FontAwesome para los iconos -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="js/sidebar.js"></script>

