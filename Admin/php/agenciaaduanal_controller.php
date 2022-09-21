<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_agenciaaduanal($_POST['nombre']);
        break;
    case 'editar':
        editar_agenciaaduanal($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_agenciaaduanal($_POST['id']);
        break;
}
function agregar_agenciaaduanal($nombre)
{
    include 'conexion.php';
    $sql = "INSERT INTO `agencias_aduanales` (`nombre`) VALUES ('$nombre') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_agenciaaduanal($id)
{
    include './conexion.php';
    $sql = "DELETE FROM agencias_aduanales WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_agenciaaduanal($id, $nombre)
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
