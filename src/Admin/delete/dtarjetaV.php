<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_tarjeta_v'])) {
    header("Location: ../FdtarjetaV.php");
    exit();
}

$id_tarjeta_v = $_POST['id_tarjeta_v'];
$link = conectar();

if (!$link) {
    header("Location: ../FdtarjetaV.php");
    exit();
}

$sql = "DELETE FROM tarjetasV WHERE IdTarjetaV = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../FdtarjetaV.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_tarjeta_v);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdtarjetaV.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdtarjetaV.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
