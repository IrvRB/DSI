<?php
$NumSerie = $_POST['numSerie'];
$Marca = $_POST['marca'];
$Modelo = $_POST['modelo'];
$Placa = $_POST['placa'];
$TipoCombustible = $_POST['tipoCombustible'];
$Color = $_POST['color'];
$NumMotor = $_POST['nummotor'];
$Puertas = $_POST['puertas'];
$Cilindros = $_POST['cilindros'];

print('NumSerie ='.$NumSerie."<br>");
print('Marca ='.$Marca."<br>");
print('Modelo ='.$Modelo."<br>");
print('Placa ='.$Placa."<br>");
print('Tipo Combustible ='.$TipoCombustible."<br>");
print('Color ='.$Color."<br>");
print('Num Motor ='.$NumMotor."<br>");
print('Puertas ='.$Puertas."<br>");
print('Cilindros ='.$Cilindros."<br>");


require_once '../../DSI30/assets/controlador.php';


$sql = "INSERT INTO vehiculos (numSerie, marca, modelo, placa, tipoCombustible, color, numMotor, puertas, cilindros) 
        VALUES ('$NumSerie', '$Marca', '$Modelo', '$Placa', '$TipoCombustible', '$Color', '$NumMotor', '$Puertas', '$Cilindros')";

try {
    
    $link = conectar(); 
    
   
    $registro = ejecutar($link, $sql); 
    
    if ($registro) {
        header("Location: ../registro_exitoso.php");
        exit();
    } else {
        echo "Error: No se pudo registrar el vehículo.";
    }
} catch (Exception $e) { // Cambiado a Exception general para MySQLi
    echo "Error al insertar: " . $e->getMessage();
}