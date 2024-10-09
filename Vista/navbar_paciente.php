<!-- Botón para colapsar la barra lateral -->
<button class="btn btn-primary" id="toggleSidebar" style="position: fixed; top: 20px; left: 20px;">
    <i class="fas fa-bars"></i>
</button>

<!-- Navbar Paciente - Barra Lateral -->
<nav id="sidebar" class="sidebar bg-light p-3">
    <div class="sidebar-sticky">
        <a class="navbar-brand" href="dashboard_paciente.php">
            <img src="../imagenes/clinica-logo.jpg" alt="Logo" width="30" height="24">
            <span class="text-orange">Mi Clínica</span>
        </a>

        <ul class="nav flex-column mt-3">
            <!-- Inicio -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_paciente.php">
                    <i class="fas fa-home"></i> Inicio
                </a>
            </li>

            <!-- Mis Citas -->
            <li class="nav-item">
                <a class="nav-link" href="mis_citas.php">
                    <i class="fas fa-calendar-check"></i> Mis Citas
                </a>
            </li>

            <!-- Historial Médico -->
            <li class="nav-item">
                <a class="nav-link" href="historial_medico.php">
                    <i class="fas fa-file-medical"></i> Historial Médico
                </a>
            </li>

            <!-- Perfil -->
            <li class="nav-item">
                <a class="nav-link" href="perfil_paciente.php">
                    <i class="fas fa-user"></i> Perfil
                </a>
            </li>

            <!-- Notificaciones -->
            <li class="nav-item">
                <a class="nav-link" href="notificaciones.php">
                    <i class="fas fa-bell"></i> Notificaciones
                </a>
            </li>

            <!-- Soporte o Contacto -->
            <li class="nav-item">
                <a class="nav-link" href="contacto.php">
                    <i class="fas fa-headset"></i> Soporte
                </a>
            </li>

            <!-- Usuario y Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i> Paciente</a>
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
