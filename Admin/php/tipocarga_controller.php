<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_tipocarga($_POST['nombre']);
        break;
    case 'editar':
        editar_tipocarga($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_tipocarga($_POST['id']);
        break;
}
function agregar_tipocarga($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `tipo_carga` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_tipocarga($id)
{
    include './conexion.php';
    $sql = "DELETE FROM tipo_carga WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_tipocarga($id, $nombre)
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
