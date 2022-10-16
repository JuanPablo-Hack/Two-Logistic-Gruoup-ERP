<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_viajemaritimos($_POST['cliente'], $_POST['servicio'], $_POST['booking'], $_POST['linea_naviera'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['buque'], $_POST['viaje'], $_POST['peso'], $_POST['bultos'], $_POST['puerto_carga'], $_POST['puerto_transbordo'], $_POST['puerto_destino'], $_POST['puerto_transito'], $_POST['tiempo_transito'], $_POST['cierre'], $_POST['vgm'], $_POST['despacho'], $_POST['liberacion'], $_POST['descripcion'], $_POST['check_lista']);
        break;
    case 'editar':
        editar_viajemaritimos($_POST['id'], $_POST['cliente'], $_POST['servicio'], $_POST['no_contenedores'], $_POST['tipo_viaje'], $_POST['puerto_carga'], $_POST['puerto_destino'], $_POST['cierre'], $_POST['vgm'], $_POST['peso'], $_POST['despacho'], $_POST['bultos'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_viajemaritimos($_POST['id']);
        break;
}
function agregar_viajemaritimos($cliente, $servicio, $booking, $linea_naviera, $no_contenedores, $tipo_contenedor, $buque, $viaje, $peso, $bultos, $puerto_carga, $puerto_transbordo, $puerto_destino, $puerto_transito, $tiempo_transito, $cierre, $vgm, $despacho, $liberacion, $descripcion, $check_lista)
{
    include 'conexion.php';
    $sql = "INSERT INTO `viajes_maritimos` (`id`, `cliente`, `servicio`, `booking`, `linea_naviera`, `no_contenedores`, `tipo_contenedor`, `buque`, `viaje`, `puerto_carga`, `puerto_destino`, `transbordo`, `transito`, `tiempo_transito`, `cierre`, `vgm`, `despacho`, `peso`, `bultos`, `carta_ins`, `tipo_liberacion`, `descrip`) VALUES (NULL, '$cliente', '$servicio', '$booking', '$linea_naviera', '$no_contenedores', '$tiempo_transito', '$buque', '$viaje', '$puerto_carga', '$puerto_destino', '$puerto_transbordo', '$puerto_transito', '$tiempo_transito', '$cierre', '$vgm', '$despacho', '$peso', '$bultos', '$check_lista', '$liberacion', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_viajemaritimos($id)
{
    include './conexion.php';
    $sql = "DELETE FROM viajes_maritimos WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_viajemaritimos($id, $cliente, $servicio, $no_contenedores, $tipo_viaje, $puerto_carga, $puerto_destino, $cierre, $vgm, $despacho, $peso, $bultos, $descripcion)
{
    include 'conexion.php';
    $sql = "UPDATE `viajes_maritimos` SET `cliente` = '$cliente', `servicio` = '$servicio', `no_contenedores` = '$no_contenedores', `tipo_viaje` = '$tipo_viaje', `puerto_carga` = '$puerto_carga', `puerto_destino` = '$puerto_destino', `cierre` = '$cierre', `vgm` = '$vgm', `despacho` = '$despacho', `peso` = '$peso', `bultos` = '$bultos', `descrip` = '$descripcion' WHERE `viajes_maritimos`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
