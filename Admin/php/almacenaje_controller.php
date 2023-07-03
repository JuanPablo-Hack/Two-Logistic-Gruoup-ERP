<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_almacenaje($_POST['servicio'], $_POST['nombre_producto'], $_POST['tipo_producto'], $_POST['peso'], $_POST['cubicaje'], $_POST['tipo_embalaje'], $_POST['dias_almacen'], $_POST['salida'], $_POST['check_lista'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_almacenaje($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_almacenaje($_POST['id']);
        break;
}
function agregar_almacenaje($servicio, $nombre_producto, $tipo_producto, $peso, $cubicaje, $tipo_embalaje, $dias_almacen, $salida, $check_lista, $descripcion)
{
    $documentos = implode(",", $check_lista);
    include 'conexion.php';
    $cliente = ObtenerClienteServicio($servicio);
    CambiarEstadoServicio($servicio, 2);
    $Operador = ObtenerOperadorServicio($servicio);
    $sql = "INSERT INTO `almacenaje` (`id`, `id_servicio`, `cliente`,`id_operador`, `nombre_producto`, `tipo_producto`, `peso`, `cubicaje`, `tipo_embalaje`, `dias_almacen`, `salida`, `documentos`, `descrip`) VALUES (NULL, '$servicio', '$cliente','$Operador', '$nombre_producto', '$tipo_producto', '$peso', '$cubicaje', '$tipo_embalaje', '$dias_almacen', '$salida', '$documentos', '$descripcion')";
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

function ObtenerClienteServicio($id)
{
    include './conexion.php';
    $sql = "SELECT id_cliente FROM servicios WHERE id=$id";
    $result = mysqli_fetch_array($conexion->query($sql));
    return $result["id_cliente"];
}

function CambiarEstadoServicio($id, $estado)
{
    include './conexion.php';
    $sql = "UPDATE `servicios` SET `id_estado` = '$estado' WHERE `servicios`.`id` = $id";
    $result = $conexion->query($sql);
}

function ObtenerOperadorServicio($id)
{
    include './conexion.php';
    $sql = "SELECT id_operador FROM servicios WHERE id=$id";
    $result = mysqli_fetch_array($conexion->query($sql));
    return $result["id_operador"];
}
