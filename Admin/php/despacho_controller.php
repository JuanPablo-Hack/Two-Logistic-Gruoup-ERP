<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_despacho($_POST['tipo_oper'], $_POST['servicio'], $_POST['proveedor'],  $_POST['aduana'], $_POST['terminal'], $_POST['carga'], $_POST['mercancia'],  $_POST['check_lista'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_despacho($_POST['id'], $_POST['cliente'], $_POST['mercancia'], $_POST['carga'], $_FILES['factura']['name'], $_FILES['lista_embarque']['name'], $_FILES['bl']['name'], $_FILES['ficha_tec']['name'], $_FILES['poliza_seguro']['name'], $_FILES['poliza_transporte']['name'], $_FILES['carta_garantia']['name'], $_FILES['hoja_seguridad']['name'], $_POST['descripcion']);
        break;
    case 'CambiarEstado':
        CambiarEstadoDespacho($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
function agregar_despacho($tipo_oper, $servicio, $proveedor, $aduana, $terminal, $carga, $mercancia, $check_lista, $descripcion)
{
    include 'conexion.php';
    $documentos = implode(",", $check_lista);
    $cliente = ObtenerClienteServicio($servicio);
    $Operador = ObtenerOperadorServicio($servicio);
    CambiarEstadoServicio($servicio, 2);
    $sql = "INSERT INTO despacho(tipo_despacho,id_servicio,id_cliente,id_operador,id_proveedor,aduana,terminal,id_tipo_mercancia,id_tipo_carga,documentacion,comentarios,id_estado) VALUES('$tipo_oper','$servicio','$cliente','$Operador','$proveedor','$aduana','$terminal','$carga','$mercancia','$documentos','$descripcion',1)";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function CambiarEstadoDespacho($IDCotizacion, $EstadoCotizacion)
{
    include './conexion.php';
    $sql = "UPDATE despacho SET id_estado='$EstadoCotizacion' WHERE id='$IDCotizacion'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    }
    echo 1;
}
function editar_despacho($id, $cliente, $mercancia, $carga, $factura, $lista_embarque, $bl, $ficha_tec, $poliza_seguro, $poliza_transporte, $carta_garantia, $hoja_seguridad, $descripcion)
{
    include 'conexion.php';
    $sql = "UPDATE `despachoes` SET `cliente` = '$cliente', `tipo_mercancia` = '$mercancia', `tipo_carga` = '$carga', `factura` = '$factura', `lista_embarque` = '$lista_embarque', `bl` = '$bl', `ficha_tec` = '$ficha_tec', `poliza_seguro` = '$poliza_seguro', `poliza_transporte` = '$poliza_transporte', `carta_garan` = '$carta_garantia', `hoja_seguridad` = '$hoja_seguridad', `descrip` = '$descripcion' WHERE `despachoes`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
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
