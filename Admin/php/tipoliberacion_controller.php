<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipoliberacion($_POST['nombre']);
        break;
    case 'editar':
        editar_tipoliberacion($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipoliberacion($_POST['id']);
        break;
}
function agregar_tipoliberacion($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `tipos_liberacion` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipoliberacion($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipos_liberacion WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipoliberacion($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE `tipos_liberacion` SET `nombre` = '$nombre' WHERE `tipos_liberacion`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../tipos_liberaciones.php");
    } else {
        header("Location: ../tipos_liberaciones.php");
    }
}
