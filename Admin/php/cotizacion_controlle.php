<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_Cotizacion($_POST['cliente'], $_POST['no_conceptos'], implode(',', $_POST['conceptos']), implode(',', $_POST['cantidades']), implode(',', $_POST['precios']));
        break;
    case 'editar':
        editar_Cotizacion($_POST['id'], $_POST['nombre']);
        break;
    case 'CambiarEstado':
        CambiarEstadoCotizacion($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
function agregar_Cotizacion($nombre, $no_conceptos, $conceptos, $cantidades, $precios)
{
    include 'conexion.php';
    $sql = "INSERT INTO `cotizaciones` (`id`, `id_cliente`, `no_conceptos`, `conceptos`, `cantidades`, `precios`, `creado`) VALUES (NULL, '$nombre', '$no_conceptos', '$conceptos', '$cantidades', '$precios', current_timestamp())";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function CambiarEstadoCotizacion($IDCotizacion, $EstadoCotizacion)
{
    include './conexion.php';
    $sql = "UPDATE cotizaciones SET id_estado='$EstadoCotizacion' WHERE id='$IDCotizacion'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    }
    echo 1;
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
