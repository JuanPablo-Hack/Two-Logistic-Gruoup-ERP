<?php
editar_tipoproducto($_POST['id'], $_POST['nombre']);
function editar_tipoproducto($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipo_producto` SET `nombre` = '$nombre' WHERE `tipo_producto`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_productos.php");
    } else {
        header("Location: ../../tipos_productos.php");
    }
}
