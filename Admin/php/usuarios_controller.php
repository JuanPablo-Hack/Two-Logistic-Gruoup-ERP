<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_trabajador($_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'editar':
        editar_trabajador($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_trabajador($_POST['id']);
        break;
}
function agregar_trabajador($nombre, $cargo, $correo, $tel, $contra, $rol)
{
    include 'conexion.php';
    $sql = "INSERT INTO trabajador(nombre, correo, tel, cargo, pwd, rol) VALUES ('$nombre','$correo','$tel','$cargo','$contra','$rol')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_trabajador($id)
{
    include './conexion.php';
    $sql = "DELETE FROM trabajador WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_trabajador($id, $nombre, $cargo, $correo, $tel, $rol)
{
    include 'conexion.php';
    $sql = "UPDATE `trabajador` SET `nombre` = '$nombre ', `correo` = '$correo', `tel` = '$tel', `cargo` = '$cargo', `pwd` = '$contra', `rol` = '$rol' WHERE `trabajador`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function get_trabajador($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador WHERE id = 1";
    $resultado = $conexion->query($sql);
    return $resultado;
}
