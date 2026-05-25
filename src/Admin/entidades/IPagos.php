<?php
$IdPago = $_POST['idpago'];
$Nombre = $_POST['nombre'];
$Asignacion = $_POST['asignacion'];

print('ID Pago ='.$IdPago."<br>");
print('Nombre ='.$Nombre."<br>");
print('Asignación ='.$Asignacion."<br>");

require_once('../../DSI30/assets/controlador.php');

try {

    $sql = "INSERT INTO pagos (idPago, nombre, asignacion) 
            VALUES ('$IdPago', '$Nombre', '$Asignacion')";

    $link = conectar(); 
    

    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        echo "¡Pago registrado con éxito! Ya puedes volver a intentar insertar la tarjeta vehicular.";
    }
} catch (Exception $e) {
    echo "Error al insertar el pago: " . $e->getMessage();
}
?>