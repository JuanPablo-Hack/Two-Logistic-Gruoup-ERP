<?php
switch ($_POST['accion']) {
    case 'agregar':
        if ($_POST['tipo_viaje'] == 'Viaje Marítimo' || $_POST['tipo_viaje'] == 'Viaje Áereo') {
            agregar_viajes_maritimos($_POST['tipo_viaje'], $_POST['servicio'], $_POST['cliente'], $_POST['booking'], $_POST['linea_naviera'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['buque'], $_POST['viaje'], $_POST['peso'], $_POST['bultos'], $_POST['puerto_carga'], $_POST['puerto_transbordo'], $_POST['puerto_destino'], $_POST['puerto_transito'], $_POST['tiempo_transito'], $_POST['cierre'], $_POST['vgm'], $_POST['check_lista'], $_POST['liberacion'], $_POST['descripcion']);
        } else {
            agregar_viajes_terrestre($_POST['tipo_viaje'], $_POST['servicio'], $_POST['cliente'], $_POST['terminal'], $_POST['fecha_servicio'], $_POST['hora'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['tipo_viaje_terrestre'], $_POST['peso'], $_POST['bultos'], $_POST['agente_aduanal'], $_POST['tipo_mercancia'], $_POST['tipo_plataforma'], $_POST['transporte'], $_POST['descripcion']);
        }
        break;
    case 'editar':
        editar_viajes($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'CambiarEstado':
        CambiarEstadoCotizacion($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
function agregar_viajes_maritimos($tipo_viaje, $servicio, $cliente, $booking, $linea_naviera, $no_contenedores, $tipo_contenedor, $buque, $viaje, $peso, $bultos, $puerto_carga, $puerto_transbordo, $puerto_destino, $puerto_transito, $tiempo_transito, $cierre, $vgm, $check_lista, $liberacion, $descripcion)
{
    include './conexion.php';
    $sql = "INSERT INTO `viajes` (`id`, `tipo_viaje`, `id_servicio`, `id_cliente`, `terminal`, `fecha_servicio`, `hora`, `booking`, `linea_naviera`, `no_contenedores`, `tipo_contenedores`, `tipo_viaje_terrestre`, `buque`, `viaje`, `peso`, `bultos`, `puerto_carga`, `puerto_transbordo`, `puerto_destino`, `puerto_transito`, `tiempo_transito`, `cierre`, `vgm`, `docu`, `tipo_liberacion`, `agencias_aduanales`, `tipo_mercancia`, `tipo_plataforma`, `transporte`, `descrip`, `creado`) VALUES (NULL, '$tipo_viaje', '$servicio', '$cliente', NULL, NULL, NULL, '$booking', '$linea_naviera', '$no_contenedores', '$tipo_contenedor', NULL, '$buque', '$viaje', '$peso', '$bultos', '$puerto_carga', '$puerto_transbordo', '$puerto_destino', '$puerto_transito', '$tiempo_transito', '$cierre', '$vgm', '$check_lista', '$liberacion', NULL, NULL, NULL, NULL, '$descripcion', current_timestamp())";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function agregar_viajes_terrestre($tipo_viaje, $servicio, $cliente, $terminal, $fecha_servicio, $hora, $no_contenedores, $tipo_contenedor, $tipo_viaje_terrestre, $peso, $bultos, $agente_aduanal, $tipo_mercancia, $tipo_plataforma, $transporte, $descripcion)
{
    include './conexion.php';
    $sql = "INSERT INTO `viajes` (`id`, `tipo_viaje`, `id_servicio`, `id_cliente`, `terminal`, `fecha_servicio`, `hora`, `booking`, `linea_naviera`, `no_contenedores`, `tipo_contenedores`, `tipo_viaje_terrestre`, `buque`, `viaje`, `peso`, `bultos`, `puerto_carga`, `puerto_transbordo`, `puerto_destino`, `puerto_transito`, `tiempo_transito`, `cierre`, `vgm`, `docu`, `tipo_liberacion`, `agencias_aduanales`, `tipo_mercancia`, `tipo_plataforma`, `transporte`, `descrip`, `creado`) VALUES (NULL, '$tipo_viaje', '$cliente', '$servicio', '$terminal', '$fecha_servicio', '$hora', NULL, NULL, '$no_contenedores', '$tipo_contenedor', '$tipo_viaje_terrestre', NULL, NULL, '$peso', '$bultos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$agente_aduanal', '$tipo_mercancia', '$tipo_plataforma', '$transporte', '$descripcion', current_timestamp())";
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
    $sql = "UPDATE viajes SET id_estado='$EstadoCotizacion' WHERE id='$IDCotizacion'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    }
    echo 1;
}
function editar_viajes($id, $razon_social, $rfc, $contacto, $tel, $cargo, $email, $domicilio, $estado, $nombre_representante)
{
    include 'conexion.php';
    $sql = "UPDATE `proveedores` SET `razon_social` = '$razon_social', `rfc` = '$rfc', `cargo` = '$cargo', `contacto` = '$contacto', `tel` = '$tel', `correo` = '$email', `domicilio` = '$domicilio', `estado_empresarial` = '$estado', `nombre_representante` = '$nombre_representante' WHERE `proveedores`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
