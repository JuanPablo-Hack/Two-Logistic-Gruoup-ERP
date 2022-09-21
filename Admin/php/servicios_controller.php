<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_servicio($_POST['cliente'], $_POST['cotizacion'], $_POST['contrato'], $_POST['operador'], $_POST['fecha_servicio'], $_POST['descripcion']);
        break;
    case 'editar':
        //agregar_servicios($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_servicios($_POST['id']);
        break;
}
function agregar_servicio($id_cliente, $id_cotizacion, $id_contrato, $id_operador, $fecha_servicio, $descripcion)
{

    include 'conexion.php';
    $sql = "INSERT INTO servicios (id_cliente, id_cotizacion, id_contrato, fecha_servicio, id_operador, descripcion) VALUES ('$id_cliente', '$id_cotizacion', '$id_contrato', '$fecha_servicio', '$id_operador', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_servicios($id)
{
    include './conexion.php';
    $sql = "DELETE FROM servicios WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
