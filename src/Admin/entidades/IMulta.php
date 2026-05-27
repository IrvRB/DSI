<?php
$Fecha = $_POST['fecha'];
$Hora = $_POST['hora'];
$Folio = $_POST['folio'];
$ReporteSeccion = $_POST['reporteseccion'];
$IdTarjetaCirculacion = $_POST['idtarjetacirculacion'];
$IdLicencia = $_POST['idlicencia'];
$IdAgente = $_POST['idagente'];
$IdPago = $_POST['idpago'];



require_once '../../DSI30/assets/controlador.php';


$sql = "INSERT INTO multas (fecha, hora, folio, reporteseccion, idtarjetacirculacion, idlicencia, idagente, idpago) 
        VALUES ('$Fecha', '$Hora', '$Folio', '$ReporteSeccion', '$IdTarjetaCirculacion', '$IdLicencia', '$IdAgente', '$IdPago')";

try {
   
    $link = conectar(); 
    
   
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Multa guardada correctamente!";
    } else {
        echo "Error: No se pudo registrar la multa.";
    }
} catch (Exception $e) { 
    echo "Error al insertar: " . $e->getMessage();
}