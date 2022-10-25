<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_almacenaje($_POST['cliente'], $_POST['nombre_producto'], $_POST['tipo_producto'], $_POST['peso'], $_POST['cubicaje'], $_POST['tipo_embalaje'], $_POST['dias_almacen'], $_POST['salida'], $_POST['check_lista'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_almacenaje($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_almacenaje($_POST['id']);
        break;
}
function agregar_almacenaje($cliente, $nombre_producto, $tipo_producto, $peso, $cubicaje, $tipo_embalaje, $dias_almacen, $salida, $check_lista, $descripcion)
{
    $documentos = implode(",", $check_lista);
    include 'conexion.php';
    $sql = "INSERT INTO `almacenaje` (`id`, `cliente`, `nombre_producto`, `tipo_producto`, `peso`, `cubicaje`, `tipo_embalaje`, `dias_almacen`, `salida`, `documentos`, `descrip`) VALUES (NULL, '$cliente', '$nombre_producto', '$tipo_producto', '$peso', '$cubicaje', '$tipo_embalaje', '$dias_almacen', '$salida', '$documentos', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_almacenaje($id)
{
    include './conexion.php';
    $sql = "DELETE FROM almacenaje WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_almacenaje($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
function subir_imagen($carpeta, $subcarpeta)
{

    $ruta_manifiestos = '../../almacenaje/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $carpeta . "/" . $subcarpeta . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['imagen']['name']);
}
