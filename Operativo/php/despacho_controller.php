<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_despacho($_POST['tipo_oper'], $_POST['servicio'], $_POST['proveedor'],  $_POST['aduana'], $_POST['terminal'], $_POST['carga'], $_POST['mercancia'],  $_POST['check_lista'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_despacho($_POST['id'], $_POST['descripcion']);
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
function editar_despacho($id, $comentarios)
{
    include './conexion.php';
    $sql = "UPDATE `despacho` SET `comentarios` = '$comentarios' WHERE `despacho`.`id` = $id";
    $result = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../listar_importacion.php");
    } else {
        header("Location: ../listar_importacion.php");
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
