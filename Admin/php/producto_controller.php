<?php
switch ($_POST['accion']) {
    case 'agregar':
        ingreso_producto($_POST['cliente'], $_POST['nombre_producto'], $_POST['proveedor'], $_POST['descripcion']);
        break;
    case 'entrada':
        entrada_producto($_POST['id'], $_POST['ticket'], $_POST['placas'], $_POST['peso_bruto'],  $_POST['peso_tara'], $_POST['peso_neto'], $_POST['descripcion']);
        break;
    case 'salida':
        salida_producto($_POST['id'], $_POST['ticket'], $_POST['placas'], $_POST['peso_bruto'],  $_POST['peso_tara'], $_POST['peso_neto'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_producto($_POST['id']);
        break;
}
function ingreso_producto($cliente, $nombre_producto, $proveedor, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `productos` (`nombre`, `cliente`, `proveedor`, `descrip`) VALUES ('$nombre_producto', '$cliente', '$proveedor', '$descripcion')";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        echo 2;
    }
    echo 1;
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
function salida_producto($id, $ticket, $placas, $peso_bruto, $peso_tara, $peso_neto, $descripcion)
{
    RestarProducto($id, $peso_bruto, $peso_tara, $peso_neto);
    include 'conexion.php';
    $sql = "INSERT INTO `salidas_productos` (`material`, `ticket`, `placas`, `peso_bruto`, `peso_tara`, `peso_neto`, `descrip`) VALUES ('$id', '$ticket', '$placas', '$peso_bruto', '$peso_tara', '$peso_neto', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../inventario.php");
    } else {
        header("Location: ../inventario.php");
    }
}
function entrada_producto($id, $ticket, $placas, $peso_bruto, $peso_tara, $peso_neto, $descripcion)
{
    SumarProducto($id, $peso_bruto, $peso_tara, $peso_neto);
    include 'conexion.php';
    $sql = "INSERT INTO `entradas_productos` (`id`, `material`, `ticket`, `placas`, `peso_bruto`, `peso_tara`, `peso_neto`, `descrip`, `creado`) VALUES (NULL, '$id', '$ticket', '$placas', '$peso_bruto', '$peso_tara', '$peso_neto', '$descripcion', current_timestamp())";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../inventario.php");
    } else {
        header("Location: ../inventario.php");
    }
}

function SumarProducto($id, $peso_bruto, $peso_tara, $peso_neto)
{
    include 'conexion.php';
    $obtener_dato = "SELECT peso_bruto,peso_tara,peso_neto FROM productos WHERE id='$id'";
    $resultado = $conexion->query($obtener_dato);
    $datos = mysqli_fetch_array($resultado);
    $peso_bruto_total = $datos['peso_bruto'] + $peso_bruto;
    $peso_tara_total = $datos['peso_tara'] + $peso_tara;
    $peso_neto_total = $datos['peso_neto'] + $peso_neto;
    $sql = "UPDATE `productos` SET `peso_bruto` = '$peso_bruto_total', `peso_tara` = '$peso_tara_total', `peso_neto` = '$peso_neto_total'  WHERE `productos`.`id` =$id";
    $resultado = $conexion->query($sql);
}

function RestarProducto($id, $peso_bruto, $peso_tara, $peso_neto)
{
    include 'conexion.php';
    $obtener_dato = "SELECT peso_bruto,peso_tara,peso_neto FROM productos WHERE id='$id'";
    $resultado = $conexion->query($obtener_dato);
    $datos = mysqli_fetch_array($resultado);
    $peso_bruto_total = $datos['peso_bruto'] - $peso_bruto;
    $peso_tara_total = $datos['peso_tara'] - $peso_tara;
    $peso_neto_total = $datos['peso_neto'] - $peso_neto;
    $sql = "UPDATE `productos` SET `peso_bruto` = '$peso_bruto_total', `peso_tara` = '$peso_tara_total', `peso_neto` = '$peso_neto_total'  WHERE `productos`.`id` =$id";
    $resultado = $conexion->query($sql);
}
