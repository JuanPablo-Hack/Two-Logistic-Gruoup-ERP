<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipomercancia($_POST['nombre']);
        break;
    case 'editar':
        editar_tipomercancia($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipomercancia($_POST['id']);
        break;
}
function agregar_tipomercancia($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `tipo_mercancia` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipomercancia($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipo_mercancia WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipomercancia($id, $nombre)
{
    include 'conexion.php';
    $sql = "UPDATE admin SET nombre='$nombre',tel='$tel',correo='$correo',contra='$contra', cargo='$cargo',rol='$rol' WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
