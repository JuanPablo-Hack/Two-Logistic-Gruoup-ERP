<?php
editar_tipocontenedor($_POST['id'], $_POST['nombre']);
function editar_tipocontenedor($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipos_contenedores` SET `nombre` = '$nombre' WHERE `tipos_contenedores`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipo_contenedores.php");
    } else {
        header("Location: ../../tipo_contenedores.php");
    }
}
