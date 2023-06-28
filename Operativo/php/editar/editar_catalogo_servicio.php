<?php
editar_servicio($_POST['id'], $_POST['nombre']);
function editar_servicio($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `catalogo_servicios` SET `nombre` = '$nombre' WHERE `catalogo_servicios`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../catalogo_servicios.php");
    } else {
        header("Location: ../../catalogo_servicios.php");
    }
}
