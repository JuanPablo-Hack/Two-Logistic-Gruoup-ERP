<?php
editar_trabajador($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
function editar_trabajador($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
{
    include '../conexion.php';
    $sql = "UPDATE `trabajador` SET `nombre` = '$nombre ', `correo` = '$correo', `tel` = '$tel', `cargo` = '$cargo', `pwd` = '$contra', `rol` = '$rol' WHERE `trabajador`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../../usuarios.php");
    } else {
        header("Location: ../../usuarios.php");
    }
}
