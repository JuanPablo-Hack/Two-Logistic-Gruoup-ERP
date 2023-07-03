<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_traspaleo($_POST['ref'], $_POST['servicio'], $_POST['peso'], $_POST['cubicaje'], $_POST['temperatura'], $_POST['tipo_embalaje'], $_POST['no_contenedores'],  $_POST['transporte_entrada'], $_POST['transporte_salida'], $_POST['datos_entrada'], $_POST['datos_salida'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_traspaleo($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_traspaleo($_POST['id']);
        break;
}
function agregar_traspaleo($ref, $servicio, $peso, $cubicaje, $temperatura, $tipo_embalaje, $no_contenedores, $transporte_entrada, $transporte_salida, $datos_entrada, $datos_salida, $descripcion)
{
    $datos_entrada_transporte = implode(",", $datos_entrada);
    $datos_salida_transporte = implode(",", $datos_salida);
    include 'conexion.php';
    $cliente = ObtenerClienteServicio($ref);
    CambiarEstadoServicio($ref, 2);
    $Operador = ObtenerOperadorServicio($ref);
    $sql = "INSERT INTO `traspaleo` (`id`,`id_servicio` ,`cliente`,`id_operador`, `tipo_producto`, `peso`, `cubicaje`, `temp`, `tipo_embalaje`, `no_contenedores`, `transportista_entrada`, `transportista_salida`, `datos_entrada`, `datos_salida`, `descrip`) VALUES (NULL,'$ref', '$cliente','$Operador', '$servicio', '$peso', '$cubicaje', '$temperatura', '$tipo_embalaje', '$no_contenedores', '$transporte_entrada', '$transporte_salida', '$datos_entrada_transporte', '$datos_salida_transporte', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_traspaleo($id)
{
    include './conexion.php';
    $sql = "DELETE FROM traspaleo WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_traspaleo($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
{
    include 'conexion.php';
    $sql = "UPDATE admin SET nombre='$nombre',tel='$tel',correo='$correo',contra='$contra', cargo='$cargo',rol='$rol' WHERE id='$id'";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}

function ObtenerClienteServicio($id)
{
    include './conexion.php';
    $sql = "SELECT id_cliente FROM servicios WHERE id=$id";
    $result = mysqli_fetch_array($conexion->query($sql));
    return $result["id_cliente"];
}

function CambiarEstadoServicio($id, $estado)
{
    include './conexion.php';
    $sql = "UPDATE `servicios` SET `id_estado` = '$estado' WHERE `servicios`.`id` = $id";
    $result = $conexion->query($sql);
}

function ObtenerOperadorServicio($id)
{
    include './conexion.php';
    $sql = "SELECT id_operador FROM servicios WHERE id=$id";
    $result = mysqli_fetch_array($conexion->query($sql));
    return $result["id_operador"];
}
