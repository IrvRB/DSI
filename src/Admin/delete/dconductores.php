<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_conductor'])) {
    header("Location: ../Fdconductores.php");
    exit();
}

$id_conductor = $_POST['id_conductor'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdconductores.php");
    exit();
}

$sql = "DELETE FROM conductores WHERE idConductor = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdconductores.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_conductor);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdconductores.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdconductores.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
