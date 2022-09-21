<?php
function tipos_servicios()
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipos_servicios";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function clientes()
{
    include 'conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
