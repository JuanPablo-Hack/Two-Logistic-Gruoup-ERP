<?php
function serviciosTotales()
{
    include "conexion.php";
    $result =  $conexion->query("SELECT COUNT(ID) AS servicios_totales FROM servicios");
    $dato = $result->fetch_assoc();
    return $dato['servicios_totales'];
}
function viajesTotales()
{
    include "conexion.php";
    $result =  $conexion->query('SELECT COUNT(ID) AS viajes_totales FROM viajes WHERE tipo_viaje="Viaje Marítimo"');
    $dato = $result->fetch_assoc();
    return $dato['viajes_totales'];
}


function viajesTerrestresTotales()
{
    include "conexion.php";
    $result =  $conexion->query("SELECT COUNT(ID) AS viajes_terrestres FROM viajes_terrestres;");
    $dato = $result->fetch_assoc();
    return $dato['viajes_terrestres'];
}
