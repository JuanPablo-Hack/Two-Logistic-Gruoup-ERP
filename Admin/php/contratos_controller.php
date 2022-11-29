<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_contrato($_POST['cliente'], $_POST['proveedor'], $_POST['descripcion']);
        break;
    case 'eliminar':
        eliminar_contrato($_POST['id']);
        break;
}
function agregar_contrato($id_cliente, $id_proveedor, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `contratos` (id_cliente, id_proveedor, descripcion) VALUES ('$id_cliente', '$id_proveedor', '$descripcion')";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        echo 2;
    }
    echo 1;
}
function eliminar_contrato($id)
{
    include './conexion.php';
    $sql = "DELETE FROM contratos WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
