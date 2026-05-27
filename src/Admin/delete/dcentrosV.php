<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_centro_v'])) {
    header("Location: ../FdcentrosV.php");
    exit();
}

$id_centro_v = $_POST['id_centro_v'];
$link = conectar();

if (!$link) {
    header("Location: ../FdcentrosV.php");
    exit();
}

$sql = "DELETE FROM centroV WHERE IdCentroV = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../FdcentrosV.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_centro_v);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdcentrosV.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../FdcentrosV.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
