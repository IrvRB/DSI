<?php
require_once '../assets/controlador.php';

$IdAgente = $_GET['idAgente'];
$Nombre = $_GET['nombre'];
$Asignacion = $_GET['asignacion'];
print('ID Agente ='.$IdAgente."<br>");
print('Nombre ='.$Nombre."<br>");
print('Asignación ='.$Asignacion."<br>");



$sql = "INSERT INTO agentes (nombre, asignacion) VALUES ('$Nombre', '$Asignacion')";

try {
   
    $link = conectar(); 
    
    
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Agente registrado con éxito!";
    } else {
        echo "Error: No se pudo registrar el agente.";
    }
} catch (Exception $e) {
    echo "Error al insertar el agente: " . $e->getMessage();
}