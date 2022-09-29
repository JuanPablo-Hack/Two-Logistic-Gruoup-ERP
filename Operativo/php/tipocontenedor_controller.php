<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipocontenedor($_POST['nombre']);
        break;
    case 'editar':
        editar_tipocontenedor($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipocontenedor($_POST['id']);
        break;
}
function agregar_tipocontenedor($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO tipos_contenedores (nombre) VALUES ('$nombre')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipocontenedor($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipos_contenedores WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipocontenedor($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE `tipos_contenedores` SET `nombre` = '$nombre' WHERE `tipos_contenedores`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
