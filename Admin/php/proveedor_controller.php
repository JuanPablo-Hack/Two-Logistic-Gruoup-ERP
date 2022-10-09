<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_proveedor($_POST['razon_social'], $_POST['rfc'], $_POST['contacto_comer'], $_POST['email_comer'], $_POST['tel_comer'], $_POST['contacto_oper'], $_POST['email_oper'], $_POST['tel_oper'], $_POST['contacto_admin'], $_POST['email_admin'], $_POST['tel_admin'], $_POST['domicilio'], $_POST['check_lista'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'editar':
        editar_proveedor($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'eliminar':
        eliminar_proveedor($_POST['id']);
        break;
}
function agregar_proveedor($razon_social, $rfc, $contacto_comer, $email_comer, $tel_comer, $contacto_oper, $email_oper, $tel_oper, $contacto_admin, $email_admin, $tel_admin, $domicilio, $tipo_servicios, $estado, $nombre_representante)
{
    $datos_comercial = "Nombre: " . $contacto_comer . "<br>" . "Correo: " . $email_comer . "<br>" . "Teléfono: " . $tel_comer;
    $datos_operacion = "Nombre: " . $contacto_oper . "<br>" . "Correo: " . $email_oper . "<br>" . "Teléfono: " . $tel_oper;
    $datos_admin = "Nombre: " . $contacto_admin . "<br>" . "Correo: " . $email_admin . "<br>" . "Teléfono: " . $tel_admin;
    $tipos_servicios = [];
    foreach ($_POST['check_lista'] as $seleccion) {
        array_push($tipos_servicios, $seleccion);
    }
    $datos_tipos_servicios = implode("<br>", $tipos_servicios);
    include 'conexion.php';
    $sql = "INSERT INTO `proveedores` (`id`, `razon_social`, `rfc`, `datos_comercial`, `datos_operacion`, `datos_admin`, `domicilio`, `tipo_servicio`, `estado_empresarial`, `nombre_representante`) VALUES (NULL, '$razon_social', '$rfc', '$datos_comercial', '$datos_operacion', '$datos_admin', '$domicilio', '$datos_tipos_servicios', '$estado', '$nombre_representante')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_proveedor($id)
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
function editar_proveedor($id, $razon_social, $rfc, $contacto, $tel, $cargo, $email, $domicilio, $estado, $nombre_representante)
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
