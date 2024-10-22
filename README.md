Sistema Clínico - MVC
Descripción del Proyecto
Este proyecto es un Sistema Clínico basado en la arquitectura MVC (Modelo-Vista-Controlador). Está diseñado para que cada miembro del equipo pueda colaborar en diferentes áreas del sistema: manejo de pacientes, citas, administración de medicamentos y generación de reportes.

Estructura del Proyecto
El sistema sigue la arquitectura MVC, organizada de la siguiente manera:

Modelos: Aquí se encuentran las clases que representan la lógica de negocio y las interacciones con la base de datos.
Vistas: Contienen las interfaces de usuario que serán mostradas a los diferentes roles (Médicos, Enfermeras, Cajeros, Pacientes).
Controladores: Gestionan la lógica y las rutas del sistema, conectando las vistas con los modelos.
Acceso al Proyecto
Clonar el repositorio:

Los miembros del equipo pueden clonar el proyecto usando el siguiente comando:
bash
Copiar código
git clone https://github.com/tuusuario/SistemaClinico.git
Dependencias:

Configura tu entorno en el archivo .env para conectar con la base de datos local.
Ejecuta las migraciones para crear las tablas:
bash
Copiar código
php artisan migrate
Navegación del Sistema:

Médico: Gestión de pacientes, historial, diagnósticos.
Enfermera: Registro de signos vitales, control de medicamentos.
Cajero: Registro de pagos y reportes.
Paciente: Reserva de citas, historial de consultas.
Colaboración
Para colaborar en el proyecto, seguimos el siguiente flujo de trabajo:

Crear una rama para tus cambios:

bash
Copiar código
git checkout -b nombre-de-la-rama
Hacer commit de tus cambios:

bash
Copiar código
git add .
git commit -m "Descripción del cambio"
Subir la rama al repositorio:

bash
Copiar código
git push origin nombre-de-la-rama
Crear un Pull Request:

Una vez hayas terminado con los cambios, crea un Pull Request en GitHub para revisión.
Funcionalidades pendientes
Reserva de Citas: Implementación de la funcionalidad para que los pacientes puedan reservar citas, que será manejada por otro miembro del equipo.
Notificaciones: Desarrollo de las notificaciones para médicos y pacientes tras la confirmación de una cita.

___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________

LOGIN:

1.	Inicio de Sesión (Login):
•	El usuario ingresa su nombre de usuario y contraseña.
•	El sistema valida las credenciales.
2.	Validación de Usuario:
•	Si las credenciales son correctas, el sistema verifica el rol del usuario (medico, cajero, enfermera, paciente).
•	Según el rol, se redirige al usuario a una interfaz específica (por ejemplo, con un navbar personalizado y acceso a ciertas páginas).
3.	Asignación de Rol y Acceso:
•	Médico: Accede a su dashboard, historial de pacientes, y gestión de consultas.
•	Cajero: Accede a la facturación y pagos.
•	Enfermera: Accede a la gestión de pacientes, historial clínico, y asistencia médica.
•	Paciente: Accede a la visualización de citas, historial personal y recetas.

Flujo del Sistema para el Médico
1.	Inicio de Sesión:
o	El médico ingresa su usuario y contraseña en la pantalla de login.
o	Una vez autenticado, es redirigido al dashboard médico donde puede ver un resumen de su actividad y opciones.
2.	Dashboard Médico:
o	En la pantalla de bienvenida, el médico ve un listado de sus próximas citas con pacientes, y las siguientes opciones:
	Registrar Paciente: Permite agregar nuevos pacientes al sistema.
	Control de Medicamentos: Gestiona los medicamentos que se están administrando o prescribiendo.
	Ver Historial: Acceso a los historiales médicos de los pacientes.
	Calendario de Citas: Visualización de las citas programadas.
	Resumen de Reportes: Acceso a reportes sobre pacientes atendidos, especialidades, etc.
3.	Consultas:
o	En el menú lateral, bajo la opción "Consultas", el médico tiene acceso a las siguientes funcionalidades:
	Calendario de Citas: El médico puede ver y gestionar las citas.
	Historial Clínico: El médico accede a los historiales médicos de los pacientes.
	Consultas Médicas: El médico puede gestionar las consultas activas y revisar el estado de cada paciente.
4.	Reportes:
o	En la sección de reportes, el médico tiene acceso a:
	Exportar Reportes: Permite exportar información sobre la actividad médica y el rendimiento.
	Seleccionar Especialidades: Filtra reportes basados en especialidades médicas.
	Seleccionar Pacientes: El médico puede ver reportes por paciente específico.
5.	Registros:
o	En la sección de registros, el médico puede acceder a:
	Registro de Atención: Aquí puede registrar los detalles de la atención médica brindada a un paciente.
	Registro de Signos Vitales: El médico puede ingresar o revisar los signos vitales de los pacientes atendidos.
Relación entre las Partes
Cada opción dentro del dashboard tiene una relación directa con las funcionalidades del backend. Es decir, al hacer clic en "Registrar Paciente", el sistema debería abrir una interfaz de formulario que permita ingresar la información del paciente, que luego será procesada por el backend y almacenada en la base de datos.
Las relaciones clave entre las secciones son:
1.	Calendario de Citas y Consultas Médicas: El calendario está vinculado a las consultas médicas activas. Cuando el médico selecciona una cita, se despliega la información médica asociada a esa consulta.
2.	Historial Médico y Registros: El historial médico se construye a partir de los registros ingresados en la sección de atención y signos vitales. Cualquier actualización en estos registros debe reflejarse en el

Flujo del Sistema para el Cajero
1.	Inicio de Sesión:
o	El cajero inicia sesión con su usuario y contraseña.
o	Es redirigido al dashboard de cajero, donde se presentan las opciones principales para la gestión de pagos.
2.	Dashboard de Cajero:
o	El cajero puede ver la siguiente información relevante:
	Total Cobrado Hoy: Muestra el monto total recaudado durante el día.
	Transacciones de Hoy: Número de transacciones realizadas.
	Pagos Pendientes: Pagos que aún no han sido completados por los pacientes.
o	Las principales funcionalidades que puede realizar son:
	Registrar Pago: Permite registrar los pagos realizados por los pacientes (consultas, medicamentos, procedimientos).
	Historial de Pagos: El cajero puede revisar los pagos realizados por los pacientes a lo largo del tiempo.
	Emitir Recibos: Genera recibos de los pagos completados.
	Generar Reportes: El cajero puede generar reportes financieros de las transacciones, ingresos, y pagos pendientes.
3.	Consultas y Pagos:
o	Aunque el cajero tiene la opción de "Consultas Médicas", esta funcionalidad no es relevante para su rol. Será eliminada para que no interfiera en el flujo de trabajo.
4.	Registro de Pagos:
o	El cajero puede ingresar en la opción Registro de Pagos, donde se muestran los pagos pendientes y puede completar transacciones.
5.	Reportes:
o	En la opción de Generar Reportes, el cajero puede exportar información financiera, como ingresos por consultas, procedimientos, medicamentos, etc. También puede filtrar estos reportes por fechas, especialidades o pacientes.
Modificaciones Pendientes:
1.	Eliminar accesos innecesarios:
o	Dado que el cajero no debe tener acceso a las consultas médicas o la gestión de pacientes, sería conveniente eliminar las opciones de Consultas Médicas y Registro de Signos Vitales de su menú lateral.
2.	Añadir flujo de cobro:
o	Flujo de cobro completo. El cajero debería tener una sección clara donde pueda registrar los pagos de forma eficiente (quizá agregar una opción para seleccionar si el pago es por consulta, procedimiento, o medicamentos). Pendiente, se agregara en la brevedad.
3.	Acceso solo a áreas financieras:
o	Las áreas clave para el cajero son las relacionadas a la facturación, transacciones y reportes financieros. Otras áreas del sistema deben estar restringidas. Esto mas que nada por el área de consultas médicas. 

Flujo del Sistema para la Enfermera
1.	Inicio de Sesión:
o	La enfermera inicia sesión con su usuario y contraseña.
o	Es redirigida al dashboard de enfermera, donde puede gestionar los signos vitales, el estado de los pacientes y administrar medicamentos.
2.	Dashboard de Enfermera:
o	En esta pantalla, la enfermera puede ver un resumen de su trabajo diario:
	Pacientes Atendidos Hoy: Muestra el número de pacientes atendidos en el día.
	Citas Próximas: Lista las citas pendientes.
	Medicamentos Administrados: Muestra el número de medicamentos administrados durante el día.
o	Las principales funcionalidades disponibles son:
	Registrar Signos Vitales: Permite registrar los signos vitales de los pacientes.
	Control de Medicamentos: Gestiona los medicamentos que se han administrado o están pendientes.
	Ver Historial: Acceso al historial médico de los pacientes.
3.	Consultas:
o	Bajo la opción de Consultas, la enfermera puede gestionar y revisar:
	Calendario de Citas: Ver el calendario con las citas programadas.
	Generar Historial Clínico: Revisar y generar informes de historial clínico.
	Consultas Médicas: Ver las consultas que están programadas y el estado de los pacientes.
4.	Registros:
o	En la sección de registros, la enfermera puede:
	Registro de Atención: Registrar detalles de la atención brindada a los pacientes (signos vitales, observaciones).
	Registro de Signos Vitales: Ingresar los signos vitales tomados a los pacientes en consulta.
5.	Reportes:
o	La enfermera tiene la capacidad de generar reportes sobre los pacientes atendidos:
	Exportar Reportes: Puede generar y exportar reportes de atención médica, signos vitales, y medicamentos administrados.
	Seleccionar Especialidades y Pacientes: Filtrar los reportes según la especialidad médica o los pacientes específicos.
Modificaciones Pendientes:
1.	Accesos innecesarios:
o	Dado que la enfermera no necesita gestionar consultas médicas o generar historiales clínicos completos, se eliminará estas opciones del menú.
2.	Flujo de Medicamentos:
o	Se reforzara el flujo relacionado al control de medicamentos, permitiendo a la enfermera registrar cada vez que se administra un medicamento y verificar que este se haya registrado correctamente en el historial del paciente.
3.	Simplificación de Reportes:
o	Aunque los reportes son útiles, se limitara el acceso de la enfermera solo a los informes que están relacionados con su trabajo (signos vitales, atención brindada, administración de medicamentos).

Flujo del Sistema para el Paciente
1.	Inicio de Sesión:
o	El paciente inicia sesión con su usuario y contraseña.
o	Es redirigido a su dashboard de paciente, donde puede ver las próximas citas y tiene la opción de reservar una nueva cita.
2.	Reserva de Cita:
o	Al hacer clic en "Reservar Cita", el paciente accede a un formulario para seleccionar:
	Especialidad médica.
	Fecha y hora disponibles.
	Doctor disponible.
o	El paciente confirma su reserva, y esta información se almacena en la base de datos del sistema.
3.	Actualización del Calendario:
o	Una vez que el paciente reserva su cita, esta debe ser reflejada automáticamente en el calendario de citas del médico correspondiente.
o	El backend actualizará tanto el calendario del médico como el del sistema en general, mostrando la nueva cita en el Calendario de Citas de la interfaz del médico.
4.	Historial Médico y Citas:
o	El paciente puede acceder a la opción de Historial Médico para revisar sus consultas pasadas.
o	Además, en la sección de Mis Citas, puede ver las citas próximas y el estado de cada una (confirmada, pendiente o completada).
5.	Notificaciones:
o	El sistema debería generar una notificación tanto para el paciente como para el médico cuando se haga la reserva de una cita, avisando de la nueva entrada en el calendario.
Relación entre las Secciones
Para que este flujo funcione, necesitas asegurar que los siguientes componentes del sistema estén relacionados:
1.	Reserva de Cita y Calendario:
o	La acción de reservar una cita por parte del paciente debe estar conectada directamente con la actualización del calendario en el rol de médico. Esto se logrará haciendo que la reserva de citas impacte en la tabla de citas del backend, permitiendo que la información fluya hacia la vista de calendario.
2.	Historial Médico y Citas:
o	Toda consulta futura o pasada debe registrarse automáticamente en el historial médico del paciente. Esto implica que cuando se complete una consulta médica, el backend debe actualizar el historial médico del paciente.
3.	Notificaciones:
o	Cada vez que se realice una reserva de cita, el sistema debe notificar tanto al médico como al paciente, para asegurar que ambos estén al tanto del evento.




Flujo de Reserva de Citas y Conexión con el Calendario
El sistema de reserva de citas permitirá al paciente gestionar sus propias citas médicas de manera sencilla. Al acceder a la opción de reservar cita, el paciente seleccionará una especialidad médica, la fecha y hora deseadas, y el médico de su preferencia (si estuviera disponible). Una vez completado el formulario, la información de la cita se almacenará en el sistema.
Proceso de Reserva de Citas
El sistema validará que el médico seleccionado esté disponible en la fecha y hora indicadas. Si todo es correcto, se confirmará la cita, que será automáticamente registrada tanto en el calendario del paciente como en el calendario del médico. Esto asegurará que ambos usuarios puedan ver la cita programada de forma actualizada.
Sincronización con el Calendario
La reserva de citas estará conectada directamente con el calendario del médico. De esta manera, cada vez que un paciente reserve una cita, el calendario del médico se actualizará para reflejar dicha reserva. Esta integración es fundamental para que los médicos puedan gestionar su agenda y evitar conflictos en sus horarios.
Notificaciones Automáticas
El sistema enviará notificaciones tanto al médico como al paciente tras confirmar la reserva. El paciente recibirá una notificación en su panel de usuario, además de un correo de confirmación con los detalles de la cita. El médico, por su parte, también será notificado de la nueva cita, lo que le permitirá estar al tanto de sus próximas consultas.
Registro en el Historial del Paciente
Cada vez que se programe una cita, esta quedará registrada en el historial de citas del paciente, visible desde la opción de Historial Médico. Una vez que la consulta se realice, la información se actualizará con los detalles del diagnóstico y tratamientos realizados.

