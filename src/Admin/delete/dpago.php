<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_pago'])) {
    header("Location: ../Fdpago.php");
    exit();
}

$id_pago = $_POST['id_pago'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdpago.php");
    exit();
}

$sql = "DELETE FROM pagos WHERE idPago = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdpago.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_pago);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdpago.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdpago.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
