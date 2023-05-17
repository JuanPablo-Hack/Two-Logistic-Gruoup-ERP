<?php
editar_agenciaaduanal($_POST['id'], $_POST['nombre']);
function editar_agenciaaduanal($id, $nombre)
{
    include '../conexion.php';
    $sql = "UPDATE `agencias_aduanales` SET `nombre` = '$nombre' WHERE `agencias_aduanales`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../agentes_aduanales.php");
    } else {
        header("Location: ../../agentes_aduanales.php");
    }
}
