<?php
include '../../DSI30/assets/controlador.php';

if (!isset($_POST['id_propietario'])) {
    header("Location: ../Fdpropietario.php");
    exit();
}

$id_propietario = $_POST['id_propietario'];
$link = conectar();

if (!$link) {
    header("Location: ../Fdpropietario.php");
    exit();
}

$sql = "DELETE FROM propietarios WHERE idPropietario = ?";
$stmt = mysqli_prepare($link, $sql);

if (!$stmt) {
    mysqli_close($link);
    header("Location: ../Fdpropietario.php");
    exit();
}

$bind = mysqli_stmt_bind_param($stmt, "i", $id_propietario);

if (!$bind) {
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdpropietario.php");
    exit();
}

$registro = mysqli_stmt_execute($stmt);

if (!$registro) {
    $error = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../Fdpropietario.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($link);

if ($registro) {
    header("Location: ../registro_exitoso.php");
    exit();
}
