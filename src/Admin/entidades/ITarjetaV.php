<?php
$IdTarjetaV = $_GET['IdTarjetaV'];
$Num_linea = $_GET['Num_linea'];
$Vigencia = $_GET['Vigencia'];
$Fecha_exp = $_GET['Fecha_exp'];
$Hora_entrada = $_GET['Hora_entrada'];
$Hora_salida = $_GET['Hora_salida'];
$Semestre = $_GET['Semestre'];
$Met_analisisV = $_GET['Met_analisisV'];
$IdCentroV = $_GET['IdCentroV'];
$IdTarjetaC = $_GET['IdTarjetaC'];
$IdPago = $_GET['IdPago'];

print('ID TarjetaV ='.$IdTarjetaV."<br>");
print('Num_linea ='.$Num_linea."<br>");
print('Vigencia ='.$Vigencia."<br>");
print('Fecha_exp ='.$Fecha_exp."<br>");
print('Hora_entrada ='.$Hora_entrada."<br>");
print('Hora_salida ='.$Hora_salida."<br>");
print('Semestre ='.$Semestre."<br>");
print('Met_analisisV ='.$Met_analisisV."<br>");
print('ID CentroV ='.$IdCentroV."<br>");
print('ID TarjetaC ='.$IdTarjetaC."<br>");
print('ID Pago ='.$IdPago."<br>");

require_once('../assets/controlador.php');
$IdTarjetaV = $_GET['IdTarjetaV'];
try {
     
        $sql = "INSERT INTO tarjetasV (numLinea, vigencia, fechaExp, horaEntrada, horaSalida, semestre, metAnalisisV, idCentroV, idTarjetaC, idPagos) 
                VALUES ('$Num_linea', '$Vigencia', '$Fecha_exp', '$Hora_entrada', '$Hora_salida', '$Semestre', '$Met_analisisV', '$IdCentroV', '$IdTarjetaC', '$IdPago')";
        
        
        $link = conectar(); 
        
       
        $registro = ejecutar($link, $sql); 
        
        if ($registro) {
            echo "Se agregó correctamente la tarjeta vehicular";
        }
    } catch (Exception $e) {
        echo "Error al insertar: " . $e->getMessage();
    }
?>