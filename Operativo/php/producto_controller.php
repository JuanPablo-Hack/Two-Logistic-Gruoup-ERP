<?php
switch ($_POST['accion']) {
    case 'agregar':
        ingreso_producto($_POST['cliente'], $_POST['nombre_producto'], $_POST['tipo_producto'], $_POST['cantidad'], $_POST['fecha'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_almacenaje($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'salida':
        salida_producto($_POST['producto'], $_POST['cantidad'], $_POST['fecha'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_producto($_POST['id']);
        break;
}
function ingreso_producto($cliente, $nombre_producto, $tipo_producto, $cantidad, $fecha, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `productos` (`nombre`, `cliente`, `tipo_producto`, `cantidad`, `fecha`, `descrip`) VALUES ('$nombre_producto', '$cliente', '$tipo_producto', '$cantidad', '$fecha','$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_producto($id)
{
    include './conexion.php';
    $sql = "DELETE FROM productos WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function salida_producto($producto, $cantidad, $fecha, $descripcion)
{
    include 'conexion.php';
    $obtener_dato = "SELECT cantidad FROM productos WHERE id='$producto'";
    $resultado = $conexion->query($obtener_dato);
    $datos = mysqli_fetch_array($resultado);
    $total = $datos['cantidad'] - $cantidad;
    $sql = "UPDATE `productos` SET `cantidad` = '$total' WHERE `productos`.`id` =$producto";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
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
