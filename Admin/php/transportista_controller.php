<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_transportista($_POST['nombre'], $_POST['caat'], $_POST['rfc']);
        break;
    case 'editar':
        editar_transportista($_POST['id'], $_POST['nombre'], $_POST['caat'], $_POST['rfc']);
        break;
    case 'eliminar':
        eliminar_transportista($_POST['id']);
        break;
}
function agregar_transportista($nombre, $caat, $rfc)
{
    include 'conexion.php';
    $sql = "INSERT INTO transporte(nombre,caat,rfc) VALUES('$nombre','$caat','$rfc')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_transportista($id)
{
    include './conexion.php';
    $sql = "DELETE FROM transporte WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_transportista($id, $nombre, $caat, $rfc)
{
    include 'conexion.php';
    $sql = "UPDATE `transporte` SET `nombre` = '$nombre', `caat` = '$caat', `rfc` = '$rfc' WHERE `id` = $id ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Location: ../transportistas.php");
    } else {
        header("Location: ../transportistas.php");
    }
}
