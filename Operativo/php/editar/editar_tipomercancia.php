<?php
editar_tipomercancia($_POST['id'], $_POST['nombre']);
function editar_tipomercancia($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipo_mercancia` SET `nombre` = '$nombre' WHERE `tipo_mercancia`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_mercancias.php");
    } else {
        header("Location: ../../tipos_mercancias.php");
    }
}
