<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_servicio($_POST['cliente'], $_POST['operador'], $_POST['fecha_servicio'], $_POST['descripcion'], $_POST['check_lista']);
        break;
    case 'editar':
        editar_servicio($_POST['id'], $_POST['cliente'], $_POST['cotizacion'], $_POST['contrato'], $_POST['operador'], $_POST['fecha_servicio'], $_POST['descripcion']);
        break;
    case 'CambiarEstado':
        CambiarEstadoServicio($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
function agregar_servicio($id_cliente, $id_operador, $fecha_servicio, $descripcion, $tipos_servicios)
{
    $tipos_servicios = [];
    foreach ($_POST['check_lista'] as $seleccion) {
        array_push($tipos_servicios, $seleccion);
    }
    $datos_tipos_servicios = implode(",", $tipos_servicios);
    include 'conexion.php';
    $sql = "INSERT INTO `servicios` (`id`, `id_cliente`, `fecha_servicio`, `id_operador`, `tipos_servicios`, `descripcion`) VALUES (NULL, '$id_cliente', '$fecha_servicio', '$id_operador', '$datos_tipos_servicios', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function CambiarEstadoServicio($IDCotizacion, $EstadoServicio)
{
    include './conexion.php';
    $sql = "UPDATE servicios SET id_estado='$EstadoServicio' WHERE id='$IDCotizacion'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    }
    echo 1;
}
function editar_servicio($id, $id_cliente, $id_cotizacion, $id_contrato, $id_operador, $fecha_servicio, $descripcion)
{

    include 'conexion.php';
    $sql = "UPDATE `servicios` SET `id_cliente` = '$id_cliente', `id_cotizacion` = '$id_cotizacion', `id_contrato` = '$id_contrato', `fecha_servicio` = '$fecha_servicio', `id_operador` = '$id_operador', `descripcion` = '$descripcion' WHERE `servicios`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
