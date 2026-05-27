<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['num_serie'])) {
    header("Location: ../Fdvehiculo.php");
    exit();
}

$num_serie = $_POST['num_serie'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdvehiculo.php");
    exit();
}

$sql = "DELETE FROM vehiculos WHERE numSerie = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdvehiculo.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "s", $num_serie);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdvehiculo.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdvehiculo.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
