<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_viajeaereos($_POST['cliente'], $_POST['servicio'], $_POST['no_contenedores'], $_POST['tipo_viaje'], $_POST['puerto_carga'], $_POST['puerto_destino'], $_POST['cierre'], $_POST['vgm'], $_POST['peso'], $_POST['despacho'], $_POST['bultos'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_viajeaereos($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_viajeaereos($_POST['id']);
        break;
}
function agregar_viajeaereos($cliente, $servicio, $no_contenedores, $tipo_viaje, $puerto_carga, $puerto_destino, $cierre, $vgm, $despacho, $peso, $bultos, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `viajes_aereos` (`cliente`, `servicio`, `no_contenedores`, `tipo_viaje`, `puerto_carga`, `puerto_destino`, `cierre`, `vgm`, `despacho`, `peso`, `bultos`, `descrip`) VALUES ('$cliente', '$servicio', '$no_contenedores', '$tipo_viaje', '$puerto_carga', '$puerto_destino', '$cierre', '$vgm','$despacho', '$peso', '$bultos', '$descripcion')";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_viajeaereos($id)
{
    include './conexion.php';
    $sql = "DELETE FROM viajes_aereos WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_viajeaereos($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
