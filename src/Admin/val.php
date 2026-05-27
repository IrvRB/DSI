<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'A') {
    header("Location: ../login.php");
    exit;
}
?>