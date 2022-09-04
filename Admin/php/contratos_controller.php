<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_contrato($_POST['razon_social'], $_POST['rfc'], $_POST['contacto']);
        break;
    case 'editar':
        agregar_trabajador($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_trabajador($_POST['id']);
        break;
}
function agregar_contrato($id_cliente, $id_proveedor, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `contratos` (id_cliente, id_proveedor, descripcion) VALUES ('$id_cliente', '$id_proveedor', '$descripcion')";
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
function editar_admin($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
function get_trabajador($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador WHERE id = 1";
    $resultado = $conexion->query($sql);
    return $resultado;
}
