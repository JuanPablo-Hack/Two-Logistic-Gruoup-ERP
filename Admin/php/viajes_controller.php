<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_viajes($_POST['tipo_viaje'], $_POST['servicio'], $_POST['cliente'], $_POST['booking'], $_POST['linea_naviera'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['buque'], $_POST['viaje'], $_POST['peso'], $_POST['bultos'], $_POST['puerto_carga'], $_POST['puerto_transbordo'], $_POST['puerto_destino'], $_POST['puerto_transito'], $_POST['tiempo_transito'], $_POST['cierre'], $_POST['vgm'], $_POST['check_lista'], $_POST['liberacion'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_viajes($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'eliminar':
        eliminar_viajes($_POST['id']);
        break;
}
function agregar_viajes($tipo_viaje, $servicio, $cliente, $booking, $linea_naviera, $no_contenedores, $tipo_contenedor, $buque, $viaje, $peso, $bultos, $puerto_carga, $puerto_transbordo, $puerto_destino, $puerto_transito, $tiempo_transito, $cierre, $vgm, $check_lista, $liberacion, $descripcion)
{

    include 'conexion.php';
    if ($tipo_viaje == "Viaje Marítimo" || $tipo_viaje == "Viaje Viaje Áereo") {
        $sql = "INSERT INTO `viajes` (`id`, `tipo_viaje`, `id_servicio`, `id_cliente`, `terminal`, `fecha_servicio`, `hora`, `booking`, `linea_naviera`, `no_contenedores`, `tipo_contenedores`, `tipo_viaje_terrestre`, `buque`, `viaje`, `peso`, `bultos`, `puerto_carga`, `puerto_transbordo`, `puerto_destino`, `puerto_transito`, `tiempo_transito`, `cierre`, `vgm`, `docu`, `tipo_liberacion`, `agencias_aduanales`, `tipo_mercancia`, `tipo_plataforma`, `transporte`, `descrip`, `creado`) VALUES (NULL, '$tipo_viaje', '$servicio', '$cliente', NULL, NULL, NULL, '$booking', '$linea_naviera', '$no_contenedores', '$tipo_contenedor', NULL, '$buque', '$viaje', '$peso', '$bultos', '$puerto_carga', '$puerto_transbordo', '$puerto_destino', '$puerto_transito', '$tiempo_transito', '$cierre', '$vgm', '$check_lista', '$liberacion', NULL, NULL, NULL, NULL, '$descripcion', current_timestamp())";
    } else {
        $sql = "INSERT INTO `viajes` (`id`, `tipo_viaje`, `id_servicio`, `id_cliente`, `terminal`, `fecha_servicio`, `hora`, `booking`, `linea_naviera`, `no_contenedores`, `tipo_contenedores`, `tipo_viaje_terrestre`, `buque`, `viaje`, `peso`, `bultos`, `puerto_carga`, `puerto_transbordo`, `puerto_destino`, `puerto_transito`, `tiempo_transito`, `cierre`, `vgm`, `docu`, `tipo_liberacion`, `agencias_aduanales`, `tipo_mercancia`, `tipo_plataforma`, `transporte`, `descrip`, `creado`) VALUES (NULL, '2', '1', '1', 'asdasdas', '2022-10-21', '15:00', NULL, NULL, '5', 'asdasdasdasdasdasd', '1', NULL, NULL, '15.5', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', 'asdasdasdas', current_timestamp())";
    }
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_viajes($id)
{
    include './conexion.php';
    $sql = "DELETE FROM proveedores WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
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
