<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_traspaleo($_POST['cliente'], $_POST['tipo_producto'], $_POST['peso'], $_POST['cubicaje'], $_POST['tipo_embalaje'], $_POST['no_contenedores'],  $_POST['razon'], $_POST['caat'], $_POST['rfc'], $_POST['nombre_operador'], $_POST['placas'], $_POST['no_remolque'], $_POST['tel'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_traspaleo($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_traspaleo($_POST['id']);
        break;
}
function agregar_traspaleo($cliente, $tipo_producto, $peso, $cubicaje, $tipo_embalaje, $no_contenedores, $razon, $caat, $rfc, $nombre_operador, $placas, $no_remolque, $tel, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `traspaleo` (`cliente`, `tipo_producto`, `peso`, `cubicaje`, `tipo_embalaje`, `no_contenedores`, `razon_social`, `caat`, `rfc`, `nombre_operador`, `placas`, `no_remolque`, `tel`, `descrip`) VALUES ('$cliente', '$tipo_producto', '$peso', '$cubicaje', '$tipo_embalaje', '$no_contenedores', '$razon', '$caat', '$rfc', '$nombre_operador', '$placas', '$no_remolque', '$tel', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_traspaleo($id)
{
    include './conexion.php';
    $sql = "DELETE FROM traspaleo WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_traspaleo($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
