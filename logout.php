<?php
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();

// Redirigir al usuario al formulario de inicio de sesión.
header("Location: index.html");
exit;
?>
