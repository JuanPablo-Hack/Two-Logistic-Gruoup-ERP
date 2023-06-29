<?php
switch ($_POST['accion']) {
    case 'agregar':
        if ($_POST['tipo_viaje'] == 'Viaje Marítimo' || $_POST['tipo_viaje'] == 'Viaje Áereo') {
            agregar_viajes_maritimos($_POST['tipo_viaje'], $_POST['servicio'], $_POST['cliente'], $_POST['booking'], $_POST['linea_naviera'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['buque'], $_POST['viaje'], $_POST['peso'], $_POST['bultos'], $_POST['puerto_carga'], $_POST['puerto_transbordo'], $_POST['puerto_destino'], $_POST['puerto_transito'], $_POST['tiempo_transito'], $_POST['cierre'], $_POST['vgm'], $_POST['check_lista'], $_POST['liberacion'], $_POST['descripcion']);
        } else {
            agregar_viajes_terrestre($_POST['tipo_viaje'], $_POST['servicio'], $_POST['cliente'], $_POST['terminal'], $_POST['fecha_servicio'], $_POST['hora'], $_POST['no_contenedores'], $_POST['tipo_contenedor'], $_POST['tipo_viaje_terrestre'], $_POST['peso'], $_POST['bultos'], $_POST['agente_aduanal'], $_POST['tipo_mercancia'], $_POST['tipo_plataforma'], $_POST['transporte'], $_POST['descripcion']);
        }
        break;
    case 'comentarios':
        agregar_comentarios($_POST['id'], $_POST['descripcion']);
        break;
    case 'comentarios_terrestre':
        agregar_comentarios_terrestres($_POST['id'], $_POST['descripcion']);
        break;
    case 'CambiarEstado':
        CambiarEstadoCotizacion($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
    case 'CambiarEstadoTerrestre':
        CambiarEstadoTerrestre($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}

function agregar_viajes_maritimos($tipo_viaje, $servicio, $cliente, $booking, $linea_naviera, $no_contenedores, $tipo_contenedor, $buque, $viaje, $peso, $bultos, $puerto_carga, $puerto_transbordo, $puerto_destino, $puerto_transito, $tiempo_transito, $cierre, $vgm, $check_lista, $liberacion, $descripcion)
{
    include './conexion.php';
    $Operador = ObtenerOperadorServicio($servicio);
    $sql = "INSERT INTO viajes(tipo_viaje,id_servicio,id_cliente,booking,naviera,no_contenedores,tipo_contenedores,buque,viaje,peso,bultos,puerto_carga,puerto_transbordo,puerto_destino,puerto_transito,tiempo_transito,cierre_documental,vgm,carta_instru,id_tipo_liberacion,comentarios,id_estado,id_operador) VALUES('$tipo_viaje','$servicio','$cliente','$booking','$linea_naviera','$no_contenedores','$tipo_contenedor','$buque','$viaje','$peso','$bultos','$puerto_carga','$puerto_transbordo','$puerto_destino','$puerto_transito','$tiempo_transito','$cierre','$vgm','$check_lista','$liberacion','$descripcion',1,$Operador)";
    CambiarEstadoServicio($servicio, 2);
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
    $Operador = ObtenerOperadorServicio($servicio);
    CambiarEstadoServicio($servicio, 2);
    $sql = "INSERT INTO viajes_terrestres(id_cliente,id_servicio,terminal,fecha_servicio,hora,no_contenedores,tipo_contenedores,tipo_viaje,peso,bultos,id_agente_aduanal,id_tipo_mercancia,id_plataforma,transportista,comentarios,id_estado,id_operador) VALUES($cliente,$servicio,'$terminal','$fecha_servicio','$hora','$no_contenedores','$tipo_contenedor','$tipo_viaje_terrestre','$peso','$bultos','$agente_aduanal','$tipo_mercancia','$tipo_plataforma','$transporte','$descripcion',1,'$Operador')";
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
function CambiarEstadoTerrestre($IDCotizacion, $EstadoCotizacion)
{
    include './conexion.php';
    $sql = "UPDATE viajes_terrestres SET id_estado='$EstadoCotizacion' WHERE id='$IDCotizacion'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    }
    echo 1;
}

function ObtenerOperadorServicio($id)
{
    include './conexion.php';
    $sql = "SELECT id_operador FROM servicios WHERE id=$id";
    $result = mysqli_fetch_array($conexion->query($sql));
    return $result["id_operador"];
}

function CambiarEstadoServicio($id, $estado)
{
    include './conexion.php';
    $sql = "UPDATE `servicios` SET `id_estado` = '$estado' WHERE `servicios`.`id` = $id";
    $result = $conexion->query($sql);
}

function agregar_comentarios($id, $comentarios)
{
    include './conexion.php';
    $sql = "UPDATE `viajes` SET `comentarios_finales` = '$comentarios' WHERE `viajes`.`id` = $id";
    $result = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../viajes.php");
    } else {
        header("Location: ../viajes.php");
    }
}

function agregar_comentarios_terrestres($id, $comentarios)
{

    include './conexion.php';
    $sql = "UPDATE `viajes_terrestres` SET `comentarios_finales` = '$comentarios' WHERE `viajes_terrestres`.`id` = $id";
    $result = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../viajes_terrestres.php");
    } else {
        header("Location: ../viajes_terrestres.php");
    }
}
