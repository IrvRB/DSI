<?php

require_once '../../DSI30/assets/controlador.php';
$Idconductor = $_POST['idConductor'];
$Nombre = $_POST['nombre'];
$NumEmergenica = $_POST['numEmergenica'];
$IdDomicilio = $_POST['idDomicilio'];
print('ID Conductor ='.$Idconductor."<br>");
print('Nombre ='.$Nombre."<br>");
print('Numero Emergencia ='.$NumEmergenica."<br>");
print('ID Domicilio ='.$IdDomicilio."<br>");



$sql = "INSERT INTO conductores (nombre, idDomicilio) VALUES ('$Nombre', '$IdDomicilio')";

try {

    $link = conectar(); 

    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar el conductor.";
    }
} catch (Exception $e) {
    echo "Error al insertar el conductor: " . $e->getMessage();
}