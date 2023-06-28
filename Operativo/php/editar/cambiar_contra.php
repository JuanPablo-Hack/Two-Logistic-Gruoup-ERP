<?php
include '../conexion.php';
$contra = sha1($_POST['contra']);
$id = $_POST['id'];
$sql = "UPDATE `trabajador` SET `pwd` = '$contra' WHERE `trabajador`.`id` = $id";
$resultado = $conexion->query($sql);
if ($resultado) {
    header("Location: ../../usuarios.php");
} else {
    header("Location: ../../usuarios.php");
}
