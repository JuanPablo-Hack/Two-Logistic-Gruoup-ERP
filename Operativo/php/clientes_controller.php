<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_cliente($_POST['razon_social'], $_POST['rfc'], $_POST['contacto_comer'], $_POST['email_comer'], $_POST['tel_comer'], $_POST['contacto_oper'], $_POST['email_oper'], $_POST['tel_oper'], $_POST['contacto_admin'], $_POST['email_admin'], $_POST['tel_admin'], $_POST['domicilio'], $_POST['check_lista'], $_POST['estado'], $_POST['nombre_representante'], $_POST['credito'], $_POST['almacenamiento']);
        break;
    case 'editar':
        editar_cliente($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto_comer'], $_POST['email_comer'], $_POST['tel_comer'], $_POST['contacto_oper'], $_POST['email_oper'], $_POST['tel_oper'], $_POST['contacto_admin'], $_POST['email_admin'], $_POST['tel_admin'], $_POST['domicilio'], $_POST['check_lista'], $_POST['estado'], $_POST['nombre_representante'], $_POST['credito'], $_POST['almacenamiento']);
        break;
    case 'eliminar':
        eliminar_cliente($_POST['id']);
        break;
}
function agregar_cliente($razon_social, $rfc, $contacto_comer, $email_comer, $tel_comer, $contacto_oper, $email_oper, $tel_oper, $contacto_admin, $email_admin, $tel_admin, $domicilio, $tipo_servicios, $estado, $nombre_representante, $credito, $almacenamiento)
{
    $datos_comercial =  $contacto_comer . ","  . $email_comer . ","  . $tel_comer;
    $datos_operacion =  $contacto_oper . ","  . $email_oper . ","  . $tel_oper;
    $datos_admin =  $contacto_admin . ","  . $email_admin . ","  . $tel_admin;
    $tipos_servicios = [];
    foreach ($_POST['check_lista'] as $seleccion) {
        array_push($tipos_servicios, $seleccion);
    }
    $datos_tipos_servicios = implode(",", $tipos_servicios);
    include 'conexion.php';
    $sql = "INSERT INTO `clientes` (`id`, `razon_social`, `rfc`, `datos_comercial`, `datos_operacion`, `datos_admin`, `domicilio`, `tipo_servicio`, `estado_empresarial`, `nombre_representante`, `credito`, `almacenamiento`) VALUES (NULL, '$razon_social', '$rfc', '$datos_comercial', '$datos_operacion', '$datos_admin', '$domicilio', '$datos_tipos_servicios', '$estado', '$nombre_representante','$credito','$almacenamiento')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_cliente($id)
{
    include './conexion.php';
    $sql = "DELETE FROM clientes WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}

function editar_cliente($id, $razon_social, $rfc, $contacto_comer, $email_comer, $tel_comer, $contacto_oper, $email_oper, $tel_oper, $contacto_admin, $email_admin, $tel_admin, $domicilio, $tipo_servicios, $estado, $nombre_representante, $credito, $almacenamiento)
{
    include 'conexion.php';
    $datos_comercial =  $contacto_comer . ","  . $email_comer . ","  . $tel_comer;
    $datos_operacion =  $contacto_oper . ","  . $email_oper . ","  . $tel_oper;
    $datos_admin =  $contacto_admin . ","  . $email_admin . ","  . $tel_admin;
    $tipos_servicios = [];
    foreach ($_POST['check_lista'] as $seleccion) {
        array_push($tipos_servicios, $seleccion);
    }
    $datos_tipos_servicios = implode(",", $tipos_servicios);
    $sql = "UPDATE `clientes` SET `razon_social` = '$razon_social', `rfc` = '$rfc', `datos_comercial` = '$datos_comercial', `datos_operacion` = '$datos_operacion', `datos_admin` = '$datos_admin', `domicilio` = '$domicilio', `tipo_servicio` = '$tipos_servicios', `estado_empresarial` = '$estado', `nombre_representante` = '$nombre_representante', `credito` = '$credito', `almacenamiento` = '$almacenamiento' WHERE `clientes`.`id` = $id";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../listar_clientes.php");
    } else {
        header("Location: ../listar_clientes.php");
    }
}
