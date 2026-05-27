<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_domicilio'])) {
    header("Location: ../FdDomicilio.php");
    exit();
}

$id_domicilio = $_POST['id_domicilio'];
$link = conectar();

if (!$link) {
    header("Location: ../FdDomicilio.php");
    exit();
}

$sql = "DELETE FROM domicilios WHERE idDomicilio = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../FdDomicilio.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_domicilio);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdDomicilio.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdDomicilio.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}