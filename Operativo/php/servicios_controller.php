<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_servicio($_POST['cliente'], $_POST['operador'], $_POST['fecha_servicio'], $_POST['descripcion'], $_POST['check_lista']);
        break;
    case 'editar':
        editar_servicio($_POST['id'],  $_POST['descripcion']);
        break;
    case 'CambiarEstado':
        CambiarEstadoServicio($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
function agregar_servicio($id_cliente, $id_operador, $fecha_servicio, $descripcion, $tipos_servicios)
{
    include 'email_controller.php';
    $tipos_servicios = [];
    foreach ($_POST['check_lista'] as $seleccion) {
        array_push($tipos_servicios, $seleccion);
    }
    $datos_tipos_servicios = implode(",", $tipos_servicios);
    include 'conexion.php';
    $sql = "INSERT INTO `servicios` (`id`, `id_cliente`, `fecha_servicio`, `id_operador`, `tipos_servicios`, `descripcion`) VALUES (NULL, '$id_cliente', '$fecha_servicio', '$id_operador', '$datos_tipos_servicios', '$descripcion')";
    $resultado = $conexion->query($sql);
    echo 1;
    MandarAlertaUsuario($id_operador);
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
function editar_servicio($id,  $descripcion)
{

    include 'conexion.php';
    $sql = "UPDATE `servicios` SET  `descripcion` = '$descripcion' WHERE `servicios`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../listar_servicios.php");
    } else {
        header("Location: ../listar_servicios.php");
    }
}
