<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_proveedor($_POST['razon_social'], $_POST['rfc'], $_POST['contacto'], $_POST['cargo'], $_POST['email'], $_POST['domicilio'], $_POST['mercancia'], $_POST['estado'], $_POST['nombre_representante']);
        break;
    case 'editar':
        //agregar_proveedor($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_proveedor($_POST['id']);
        break;
}
function agregar_proveedor($razon_social, $rfc, $contacto, $cargo, $email, $domicilio, $mercancia, $estado, $nombre_representante)
{
    include 'conexion.php';
    $sql = "INSERT INTO proveedores (razon_social, rfc, cargo, contacto, correo, domicilio, tipo_servicio, estado_empresarial, nombre_representante) VALUES ('$razon_social', '$rfc', '$cargo', '$contacto', '$email', '$domicilio', '$mercancia', '$estado', '$nombre_representante')";
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