<?php
$nombreServidor = "sql726.main-hosting.eu";
$nombreUsuario = "u288448544_erp";
$passwordBaseDeDatos = "UtxTy4zD#";
$nombreBaseDeDatos = "u288448544_erp";
$conexion = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
validar_conexion($conexion);
function validar_conexion($conexion)
{
    if ($conexion->connect_error) {
        die("Conexion Fallida: " . $conexion->connect_error);
    }
}
