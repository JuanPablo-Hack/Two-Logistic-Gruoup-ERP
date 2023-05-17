<?php
editar_tipoembalaje($_POST['id'], $_POST['nombre']);
function editar_tipoembalaje($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipo_embalaje` SET `nombre` = '$nombre' WHERE `tipo_embalaje`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_embalaje.php");
    } else {
        header("Location: ../../tipos_embalaje.php");
    }
}
