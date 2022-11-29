<?php
editar_tiposervicio($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['descripcion']);
function editar_tiposervicio($id, $nombre, $precio, $descripcion)
{
    include '../conexion.php';
    $sql = "UPDATE `tipos_servicios` SET `nombre` = '$nombre', `precio` = '$precio', `descripcion` = '$descripcion' WHERE `tipos_servicios`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_servicios.php");
    } else {
        header("Location: ../../tipos_servicios.php");
    }
}
