<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_cliente($_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['mercancia'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'editar':
        cliente_proveedor($_POST['id'], $_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['tel'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'eliminar':
        eliminar_cliente($_POST['id']);
        break;
}
function agregar_cliente($razon_social, $rfc, $contacto, $tel, $cargo, $email, $domicilio, $mercancia, $estado, $nombre_representante)
{
    include 'conexion.php';
    $sql = "INSERT INTO clientes (razon_social, rfc, cargo, contacto, tel, correo, domicilio, tipo_mercancia, estado_empresarial, nombre_representante) VALUES ('$razon_social', '$rfc', '$cargo', '$contacto', '$tel', '$email', '$domicilio', '$mercancia', '$estado', '$nombre_representante')";
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

function cliente_proveedor($id, $razon_social, $rfc, $contacto, $tel, $cargo, $email, $domicilio, $estado, $nombre_representante)
{
    include 'conexion.php';
    $sql = "UPDATE `clientes` SET `razon_social` = '$razon_social', `rfc` = '$rfc', `cargo` = '$cargo', `contacto` = '$contacto', `tel` = '$tel', `correo` = '$email', `domicilio` = '$domicilio', `estado_empresarial` = '$estado', `nombre_representante` = '$nombre_representante' WHERE `clientes`.`id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
