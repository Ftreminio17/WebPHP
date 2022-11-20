<?php

$conexion = mysqli_connect("localhost", "root", "Madrid3600", "deportescr",3306);

$sql = "SELECT * FROM MERCADERIA";

$respuesta = mysqli_query($conexion, $sql);

if (mysqli_num_rows($respuesta) > 0){

    $arreglo = array();

    while ($row = mysqli_fetch_assoc($respuesta)) {
        $arreglo[] = $row;
        // echo "<pre>";
        // echo var_dump($row);
        // echo "</pre>";
    }

    echo json_encode($arreglo);

} 
else
{
    echo json_encode("Sin Registros");
}



