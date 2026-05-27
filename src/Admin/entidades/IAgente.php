<?php
require_once '../../DSI30/assets/controlador.php';

$IdAgente = $_GET['idAgente'];
$Nombre = $_GET['nombre'];
$Asignacion = $_GET['asignacion'];

$sql = "INSERT INTO agentes (nombre, asignacion) VALUES ('$Nombre', '$Asignacion')";

try {
   
    $link = conectar(); 
    
    
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar el agente.";
    }
} catch (Exception $e) {
    echo "Error al insertar el agente: " . $e->getMessage();
}