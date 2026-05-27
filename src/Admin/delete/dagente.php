<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_agente'])) {
    header("Location: ../Fdagente.php");
    exit();
}

$id_agente = $_POST['id_agente'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdagente.php");
    exit();
}

$sql = "DELETE FROM agentes WHERE idAgente = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdagente.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_agente);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdagente.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdagente.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}