<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_trabajador($_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'editar':

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
function editar_admin($nombre, $tel, $email, $user, $password)
{
    include 'conexion.php';
    $contra = sha1($password);
    $sql = "UPDATE admin SET nombre='$nombre',tel='$tel',correo='$email',contra='$contra' WHERE user='$user'";
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
