<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_multa'])) {
    header("Location: ../Fdmulta.php");
    exit();
}

$id_multa = $_POST['id_multa'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdmulta.php");
    exit();
}

$sql = "DELETE FROM multas WHERE idmulta = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdmulta.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_multa);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdmulta.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdmulta.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
