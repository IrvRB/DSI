<?php
include '../../DSI30/assets/controlador.php';
$IdDomicilio = $_POST['id_domicilio'];
$CP = $_POST['cp'];
$Calle = $_POST['calle'];
$Num_ext = $_POST['num_ext'];
$Num_int = $_POST['num_int'];
$Colonia = $_POST['colonia']; 
$Ciudad = $_POST['ciudad'];
$Estado = $_POST['estado'];


$sql = "INSERT INTO domicilios (colonia, calle, numeroInterior, numeroExterior, codigoPostal, ciudad, estado) 
        VALUES ('$Colonia', '$Calle', '$Num_int', '$Num_ext', '$CP', '$Ciudad', '$Estado')";

try {
   
    $link = conectar(); 
    
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar el domicilio.";
    }
} catch (Exception $e) {
    echo "Error al insertar el domicilio: " . $e->getMessage();
}