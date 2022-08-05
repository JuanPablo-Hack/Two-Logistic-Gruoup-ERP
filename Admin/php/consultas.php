<?php
function get_trabajador($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador WHERE id = $id";
    $resultado = $conexion->query($sql);
    return $resultado;
}
