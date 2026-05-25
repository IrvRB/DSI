<?php

require_once '../../DSI30/assets/controlador.php';
$IdCentroV = $_POST['IdCentroV'];
$Numero = $_POST['Numero'];
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Num_lineas = $_POST['Num_lineas'];
$Horario = $_POST['Horario'];

print('ID Centro V ='.$IdCentroV."<br>");
print('Número Oficial ='.$Numero."<br>");
print('Nombre del Establecimiento ='.$Nombre."<br>");
print('Dirección Completa ='.$Direccion."<br>");
print('Número de Líneas ='.$Num_lineas."<br>");
print('Horario de Atención ='.$Horario."<br>");




$sql = "INSERT INTO centroV (numero, nombre, direccion, numLineas, horario) 
        VALUES ('$Numero', '$Nombre', '$Direccion', '$Num_lineas', '$Horario')";

try {
  
    $link = conectar(); 
    

    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Centro de verificacion registrado con éxito!";
    } else {
        echo "Error: No se pudo registrar el centro de verificacion.";
    }
} catch (Exception $e) {
    echo "Error al insertar el centro de verificación: " . $e->getMessage();
}