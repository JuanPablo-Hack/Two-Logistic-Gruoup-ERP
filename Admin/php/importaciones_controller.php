<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_importacion($_POST['cliente'], $_POST['mercancia'], $_POST['carga'], $_FILES['factura']['name'], $_FILES['lista_embarque']['name'], $_FILES['bl']['name'], $_FILES['ficha_tec']['name'], $_FILES['poliza_seguro']['name'], $_FILES['poliza_transporte']['name'], $_FILES['carta_garantia']['name'], $_FILES['hoja_seguridad']['name'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_importacion($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_importacion($_POST['id']);
        break;
}
function agregar_importacion($cliente, $mercancia, $carga, $factura, $lista_embarque, $bl, $ficha_tec, $poliza_seguro, $poliza_transporte, $carta_garantia, $hoja_seguridad, $descripcion)
{
    include 'conexion.php';
    subir_documentación($cliente);
    $sql = "INSERT INTO `importaciones` (`cliente`, `tipo_mercancia`, `tipo_carga`, `factura`, `lista_embarque`, `bl`, `ficha_tec`, `poliza_seguro`, `poliza_transporte`, `carta_garan`, `hoja_seguridad`, `descrip`) VALUES ('$cliente', '$mercancia', '$carga', '$factura', '$lista_embarque', '$bl', '$ficha_tec', '$poliza_seguro', '$poliza_transporte', '$carta_garantia', '$hoja_seguridad', '$descripcion') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_importacion($id)
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
function editar_importacion($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
function subir_documentación($carpeta)
{

    $ruta_manifiestos = '../../importaciones/';
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
    move_uploaded_file($_FILES['carta_garantia']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['carta_garantia']['name']);
    move_uploaded_file($_FILES['hoja_seguridad']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['hoja_seguridad']['name']);
}
