<?php

require_once('../../DSI30/assets/controlador.php');

$Idlicencia = $_POST['idlicencia'] ?? '';

$Idconductores = $_POST['idconductor'] ?? $_POST['idconductores'] ?? ''; 
$Tipo = $_POST['tipo'] ?? '';
$FechaExpedicion = $_POST['fechaexpedicion'] ?? '';
$FechaVencimiento = $_POST['fechavencimiento'] ?? '';
$Antiguedad = $_POST['antiguedad'] ?? '';
$Restricciones = $_POST['restricciones'] ?? '';

$sql = "INSERT INTO licencias (fechaExpedicion, antiguedad, tipo, restricciones, fechaVencimiento, idConductores) 
        VALUES ('$FechaExpedicion', '$Antiguedad', '$Tipo', '$Restricciones', '$FechaVencimiento', '$Idconductores')";

try {
   
    $link = conectar(); 
    
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar la licencia.";
    }
} catch (Exception $e) {
    echo "Error al insertar la licencia: " . $e->getMessage();
}
?>