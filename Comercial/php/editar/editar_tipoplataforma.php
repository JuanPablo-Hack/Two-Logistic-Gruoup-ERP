<?php
editar_tipoplataforma($_POST['id'], $_POST['nombre']);
function editar_tipoplataforma($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `tipo_plataforma` SET `nombre` = '$nombre' WHERE `tipo_plataforma`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../tipos_plataformas.php");
    } else {
        header("Location: ../../tipos_plataformas.php");
    }
}
