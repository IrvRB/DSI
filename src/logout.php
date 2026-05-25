<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Destruir todas las variables de sesión
$_SESSION = array();
session_destroy();

// Redirigir al inicio de sesión
header("Location: login.php");
exit;