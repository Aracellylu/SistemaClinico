<?php
// Encriptar la contraseña 'password' usando password_hash
$password_encriptada = password_hash('password', PASSWORD_BCRYPT);

// Mostrar la contraseña encriptada
echo $password_encriptada;
?>
