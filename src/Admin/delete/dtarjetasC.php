<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_tarjeta_c'])) {
    header("Location: ../FdtarjetasC.php");
    exit();
}

$id_tarjeta_c = $_POST['id_tarjeta_c'];
$link = conectar();

if (!$link) {
    header("Location: ../FdtarjetasC.php");
    exit();
}

$sql = "DELETE FROM tarjetaCirculacion WHERE idTarjetaC = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../FdtarjetasC.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_tarjeta_c);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdtarjetasC.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdtarjetasC.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
