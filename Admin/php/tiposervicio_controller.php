<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tiposervicio($_POST['nombre'], $_POST['precio'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_tiposervicio($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_tiposervicio($_POST['id']);
        break;
}
function agregar_tiposervicio($nombre, $precio, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO tipos_servicios (nombre, precio, descripcion) VALUES ('$nombre', '$precio', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tiposervicio($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipos_servicios WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tiposervicio($id, $nombre, $precio, $descripcion)
{
    include 'conexion.php';
    $sql = "UPDATE `tipos_servicios` SET `nombre` = '$nombre', `precio` = '$precio', `descripcion` = '$descripcion' WHERE `tipos_servicios`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
