<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_licencia'])) {
    header("Location: ../Fdlicencias.php");
    exit();
}

$id_licencia = $_POST['id_licencia'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdlicencias.php");
    exit();
}

$sql = "DELETE FROM licencias WHERE idlicencia = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdlicencias.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_licencia);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdlicencias.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdlicencias.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
