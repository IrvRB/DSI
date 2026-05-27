<?php
$IdTarjetaC = $_GET['idtarjetaC'];
$Vigencia = $_GET['vigencia'];
$Folio = $_GET['folio'];
$Uso = $_GET['uso'];
$Rpa = $_GET['rpa'];
$Firmaaut = $_GET['firmaaut'];
$Fechaexp = $_GET['fechaexp'];
$Tiposervicio = $_GET['tiposervicio'];
$Holograma = $_GET['holograma'];
$Numserie = $_GET['numserie'];
$Idpropietario = $_GET['idpropietario'];
$Idpago = $_GET['idpago'];

try {
    $sql = "INSERT INTO tarjetaCirculacion (vigencia, folio, uso, rpa, firmaAutorizada, fechaExpiracion, tipoServicio, holograma, numSerie, idPropietario, idPago) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Vigencia, $Folio, $Uso, $Rpa, $Firmaaut, $Fechaexp, $Tiposervicio, $Holograma, $Numserie, $Idpropietario, $Idpago]);
    header("Location: ../registro_exitoso.php");
    exit();
} catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}


