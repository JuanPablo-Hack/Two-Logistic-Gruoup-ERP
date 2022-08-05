<?php
$nombreServidor = "localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "twologistic";
$conexion = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
validar_conexion($conexion);
function validar_conexion($conexion)
{
    if ($conexion->connect_error) {
        die("Conexion Fallida: " . $conexion->connect_error);
    }
}
