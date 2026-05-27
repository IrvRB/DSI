<?php

function conectar(){
    $servidor="db";
    $usuario="root";
    $pwd="root";
    $db="ControlVehicular2026";

    $con =mysqli_connect($servidor, $usuario, $pwd, $db);

    if (!$con) {
        return null;
    }

    return $con;
} 


function ejecutar($con, $sql, $params = []){
    $resultado=mysqli_query($con, $sql);

    if(!$resultado){
        return null;
    }

    return $resultado;
}

/*
function registrar ($sql,$params,$res){

    $carpeta = __DIR__ . "/record/";
    $archivo = $carpeta . "historial.csv";

    if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
    }

    $fecha = date("Y-m-d");
    $hora = date("H:i:s");

    $sql_limpio = str_replace(["\r", "\n"], " ", $sql);
    $data = json_encode($params);
    $datos = [$fecha, $hora, $sql_limpio, $data, $res];
    $fp = fopen($archivo, 'a');
    fputcsv($fp, $datos);
    fclose($fp);
}
*/

function cerrar($con){
    if ($con) {
        mysqli_close($con);
    }
}

?>