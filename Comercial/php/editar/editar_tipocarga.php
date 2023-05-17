<?php
editar_tipocarga($_POST['id'], $_POST['nombre']);
function editar_tipocarga($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipo_carga` SET `nombre` = '$nombre' WHERE `tipo_carga`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_cargas.php");
    } else {
        header("Location: ../../tipos_cargas.php");
    }
}
