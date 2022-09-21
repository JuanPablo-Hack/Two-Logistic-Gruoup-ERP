<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_Cotizacion($_POST['cliente'], $_POST['no_conceptos'], $_POST['concepto_1'], $_POST['concepto_2'], $_POST['concepto_3']);
        break;
    case 'editar':
        editar_Cotizacion($_POST['id'], $_POST['nombre']);
        break;
    case 'eliminar':
        eliminar_Cotizacion($_POST['id']);
        break;
}
function agregar_Cotizacion($nombre, $no_conceptos, $concepto_1, $concepto_2, $concepto_3)
{
    include 'conexion.php';
    $array =  get_tipo_servicio($concepto_1, $conexion) . ',' . get_tipo_servicio($concepto_2, $conexion) . ',' . get_tipo_servicio($concepto_3, $conexion);
    $sql = "INSERT INTO `cotizaciones` (`id_cliente`, `no_conceptos`, `arreglo`) VALUES ('$nombre', '$no_conceptos', '$array')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_Cotizacion($id)
{
    include './conexion.php';
    $sql = "DELETE FROM cotizaciones WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_Cotizacion($id, $nombre)
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
function get_tipo_servicio($id, $conexion)
{
    $sql = "SELECT nombre FROM tipos_servicios WHERE id='$id'";
    $resultado = $conexion->query($sql);
    $row = mysqli_fetch_array($resultado);
    return $row['nombre'];
}
