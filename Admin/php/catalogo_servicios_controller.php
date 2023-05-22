<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_servicio($_POST['nombre']);
        break;
    case 'editar':
        editar_servicio($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_servicio($_POST['id']);
        break;
}
function agregar_servicio($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `catalogo_servicios` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_servicio($id)
{
    include './conexion.php';
    $sql = "DELETE FROM catalogo_servicios WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_servicio($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE `catalogo_servicios` SET `nombre` = '$nombre' WHERE `catalogo_servicios`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
