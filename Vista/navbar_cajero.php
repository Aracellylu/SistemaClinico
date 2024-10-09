<!-- Botón para colapsar la barra lateral -->
<button class="btn btn-primary" id="toggleSidebar" style="position: fixed; top: 20px; left: 20px;">
    <i class="fas fa-bars"></i>
</button>

<!-- Navbar Cajero - Barra Lateral -->
<nav id="sidebar" class="sidebar bg-light p-3">
    <div class="sidebar-sticky">
        <a class="navbar-brand" href="dashboard_cajero.php">
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
                    <li><a class="nav-link" href="consultas.php"><i class="fas fa-stethoscope"></i> Consultas Médicas</a></li>
                </ul>
            </li>

            <!-- Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="#reportesSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-chart-bar"></i> Reportes
                </a>
                <ul class="collapse list-unstyled" id="reportesSubmenu">
                    <li><a class="nav-link" href="reportes.php"><i class="fas fa-file-export"></i> Exportar Reportes</a></li>
                    <li><a class="nav-link" href="seleccionar_especialidades.php"><i class="fas fa-clipboard-list"></i> Seleccionar Especialidades</a></li>
                    <li><a class="nav-link" href="seleccionar_pacientes.php"><i class="fas fa-user-injured"></i> Seleccionar Pacientes</a></li>
                </ul>
            </li>

            <!-- Registros -->
            <li class="nav-item">
                <a class="nav-link" href="#registrosSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i> Registros
                </a>
                <ul class="collapse list-unstyled" id="registrosSubmenu">
                    <li><a class="nav-link" href="registro_pagos.php"><i class="fas fa-cash-register"></i> Registro de Pagos</a></li>
                </ul>
            </li>

            <!-- Usuario y Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-shield-alt"></i> CAJERO</a>
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
      height: 100vh;
      width: 250px; /* Ancho cuando está expandido */
      position: fixed;
      top: 0;
      left: 0;
      background-color: #f8f9fa;
      padding-top: 20px;
      z-index: 1;
      overflow-y: auto;
      transition: all 0.3s ease; /* Transición suave */
  }

  .sidebar.collapsed {
      width: 80px; /* Ancho cuando está colapsado */
  }

  .content {
      margin-left: 250px; /* Margen cuando la barra está expandida */
      transition: all 0.3s ease;
  }

  .content.collapsed {
      margin-left: 80px; /* Margen cuando la barra está colapsada */
  }

  .text-orange {
      color: #FF5733 !important;
  }

  .list-unstyled {
      list-style: none;
      padding-left: 10px;
  }
</style>

<!-- Enlace de FontAwesome para los iconos -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Enlace al archivo JavaScript -->
<script src="js/sidebar.js"></script>
