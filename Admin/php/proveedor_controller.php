<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_proveedor($_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['cargo'], $_POST['email'], $_POST['tel'], $_POST['domicilio'], $_POST['mercancia'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'editar':
        editar_proveedor($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'eliminar':
        eliminar_proveedor($_POST['id']);
        break;
}
function agregar_proveedor($razon_social, $rfc, $contacto, $cargo, $email, $domicilio, $tel, $mercancia, $estado, $nombre_representante)
{
    include 'conexion.php';
    $sql = "INSERT INTO proveedores (razon_social, rfc, cargo, contacto, tel, correo, domicilio, tipo_servicio, estado_empresarial, nombre_representante) VALUES ('$razon_social', '$rfc', '$cargo', '$contacto','$tel', '$email', '$domicilio', '$mercancia', '$estado', '$nombre_representante')";
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
