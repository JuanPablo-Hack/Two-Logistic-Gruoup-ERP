<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipoproducto($_POST['nombre']);
        break;
    case 'editar':
        editar_tipoproducto($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipoproducto($_POST['id']);
        break;
}
function agregar_tipoproducto($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `tipo_producto` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipoproducto($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipo_producto WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipoproducto($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE `tipo_producto` SET `nombre` = '$nombre' WHERE `tipo_producto`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
