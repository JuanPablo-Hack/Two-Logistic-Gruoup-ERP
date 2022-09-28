<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_exportacion($_POST['cliente'], $_POST['mercancia'], $_POST['carga'], $_FILES['factura']['name'], $_FILES['lista_embarque']['name'], $_FILES['bl']['name'], $_FILES['ficha_tec']['name'], $_FILES['poliza_seguro']['name'], $_FILES['poliza_transporte']['name'], $_FILES['hoja_seguridad']['name'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_exportacion($_POST['id'], $_POST['cliente'], $_POST['mercancia'], $_POST['carga'], $_FILES['factura']['name'], $_FILES['lista_embarque']['name'], $_FILES['bl']['name'], $_FILES['ficha_tec']['name'], $_FILES['poliza_seguro']['name'], $_FILES['poliza_transporte']['name'], $_FILES['hoja_seguridad']['name'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_exportacion($_POST['id']);
        break;
}
function agregar_exportacion($cliente, $mercancia, $carga, $factura, $lista_embarque, $bl, $ficha_tec, $poliza_seguro, $poliza_transporte, $hoja_seguridad, $descripcion)
{
    include 'conexion.php';
    subir_documentación($cliente);
    $sql = "INSERT INTO `exportaciones` (`cliente`, `tipo_mercancia`, `tipo_carga`, `factura`, `lista_embarque`, `bl`, `ficha_tec`, `poliza_seguro`, `poliza_transporte`, `hoja_seguridad`, `descrip`) VALUES ('$cliente', '$mercancia', '$carga', '$factura', '$lista_embarque', '$bl', '$ficha_tec', '$poliza_seguro', '$poliza_transporte', '$hoja_seguridad', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_exportacion($id)
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
function editar_exportacion($id, $cliente, $mercancia, $carga, $factura, $lista_embarque, $bl, $ficha_tec, $poliza_seguro, $poliza_transporte, $hoja_seguridad, $descripcion)
{
    include 'conexion.php';
    $sql = "UPDATE `exportaciones` SET `cliente` = '$cliente', `tipo_mercancia` = '$mercancia', `tipo_carga` = '$carga', `factura` = '$factura', `lista_embarque` = '$lista_embarque', `bl` = '$bl', `ficha_tec` = '$ficha_tec', `poliza_seguro` = '$poliza_seguro', `poliza_transporte` = '$poliza_transporte', `hoja_seguridad` = '$hoja_seguridad', `descrip` = '$descripcion' WHERE `exportaciones`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function subir_documentación($carpeta)
{

    $ruta_manifiestos = '../../exportaciones/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $carpeta . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
    move_uploaded_file($_FILES['factura']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['factura']['name']);
    move_uploaded_file($_FILES['lista_embarque']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['lista_embarque']['name']);
    move_uploaded_file($_FILES['bl']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['bl']['name']);
    move_uploaded_file($_FILES['ficha_tec']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['ficha_tec']['name']);
    move_uploaded_file($_FILES['poliza_seguro']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['poliza_seguro']['name']);
    move_uploaded_file($_FILES['poliza_transporte']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['poliza_transporte']['name']);
    move_uploaded_file($_FILES['hoja_seguridad']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['hoja_seguridad']['name']);
}
