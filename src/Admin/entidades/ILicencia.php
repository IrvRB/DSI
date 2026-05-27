<?php

require_once('../../DSI30/assets/controlador.php');

$Idlicencia = $_POST['idlicencia'] ?? '';

$Idconductores = $_POST['idconductor'] ?? $_POST['idconductores'] ?? ''; 
$Tipo = $_POST['tipo'] ?? '';
$FechaExpedicion = $_POST['fechaexpedicion'] ?? '';
$FechaVencimiento = $_POST['fechavencimiento'] ?? '';
$Antiguedad = $_POST['antiguedad'] ?? '';
$Restricciones = $_POST['restricciones'] ?? '';


echo "ID Licencia = " . $Idlicencia . "<br>";
echo "ID Conductor = " . $Idconductores . "<br>"; 
echo "Tipo = " . $Tipo . "<br>";
echo "Fecha de Expedición = " . $FechaExpedicion . "<br>";
echo "Fecha de Vencimiento = " . $FechaVencimiento . "<br>";
echo "Antigüedad = " . $Antiguedad . "<br>";
echo "Restricciones = " . $Restricciones . "<br><br>";


$sql = "INSERT INTO licencias (fechaExpedicion, antiguedad, tipo, restricciones, fechaVencimiento, idConductores) 
        VALUES ('$FechaExpedicion', '$Antiguedad', '$Tipo', '$Restricciones', '$FechaVencimiento', '$Idconductores')";

try {
   
    $link = conectar(); 
    
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Licencia registrada con éxito!";
    } else {
        echo "Error: No se pudo registrar la licencia.";
    }
} catch (Exception $e) {
    echo "Error al insertar la licencia: " . $e->getMessage();
}
?>