<?php

require_once '../../DSI30/assets/controlador.php';
$IdCentroV = $_POST['IdCentroV'];
$Numero = $_POST['Numero'];
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Num_lineas = $_POST['Num_lineas'];
$Horario = $_POST['Horario'];

$sql = "INSERT INTO centroV (numero, nombre, direccion, numLineas, horario) 
        VALUES ('$Numero', '$Nombre', '$Direccion', '$Num_lineas', '$Horario')";

try {
  
    $link = conectar(); 
    

    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar el centro de verificacion.";
    }
} catch (Exception $e) {
    echo "Error al insertar el centro de verificación: " . $e->getMessage();
}