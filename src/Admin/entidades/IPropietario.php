<?php
$Idpropietario = $_POST['Idpropietario'];
$Nombre = $_POST['Nombre'];
$RFC = $_POST['RFC'];
$Iddomicilio = $_POST['Iddomicilio'];
print('ID Propietario ='.$Idpropietario."<br>");
print('Nombre ='.$Nombre."<br>");
print('RFC ='.$RFC."<br>");
print('ID Domicilio ='.$Iddomicilio."<br>");


require_once '../../DSI30/assets/controlador.php';


$sql = "INSERT INTO propietarios (nombre, rfc, idDomicilio) 
        VALUES ('$Nombre', '$RFC', '$Iddomicilio')";

try {
   
    $link = conectar(); 
    
   
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Se agregó correctamente el propietario!";
    } else {
        echo "Error: No se pudo registrar al propietario.";
    }
} catch (Exception $e) { 
    echo "Error al insertar: " . $e->getMessage();
}