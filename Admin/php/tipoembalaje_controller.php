<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipoembalaje($_POST['nombre']);
        break;
    case 'editar':
        editar_tipoembalaje($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipoembalaje($_POST['id']);
        break;
}
function agregar_tipoembalaje($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `tipo_embalaje` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipoembalaje($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipo_embalaje WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipoembalaje($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE `tipo_embalaje` SET `nombre` = '$nombre' WHERE `tipo_embalaje`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
