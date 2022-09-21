<?php
switch ($_POST['accion']) {
    case 'agregar':
        agregar_viajeterrestres($_POST['cliente'], $_POST['servicio'], $_POST['terminal'], $_POST['fecha_servicio'], $_POST['hora'], $_POST['no_contenedor'], $_POST['tipo_viaje'], $_POST['agente_aduanal'], $_POST['tipo_mercancia'], $_POST['tipo_plataforma'], $_POST['transporte'], $_POST['descripcion']);
        break;
    case 'editar':
        editar_viajeterrestres($_POST['id'], $_POST['nombre'], $_POST['cargo'], $_POST['email'], $_POST['tel'], sha1($_POST['contra']), $_POST['rol']);
        break;
    case 'eliminar':
        eliminar_viajeterrestres($_POST['id']);
        break;
}
function agregar_viajeterrestres($cliente, $servicio, $terminal, $fecha_servicio, $hora, $no_contenedor, $tipo_viaje, $agente_aduanal, $tipo_mercancia, $tipo_plataforma, $transporte, $descripcion)
{
    include 'conexion.php';
    $sql = "INSERT INTO `viajes_terrestres` (`cliente`, `servicio`, `terminal`, `fecha_servicio`, `hora`, `no_contenedor`, `tipo_viaje`, `tipo_mercancia`, `tipo_plataforma`, `transporte`, `descrip`) VALUES ('$cliente', '$servicio', '$terminal', '$fecha_servicio', '$hora', '$no_contenedor', '$tipo_viaje', '$tipo_mercancia', '$tipo_plataforma', '$transporte', '$descripcion') ";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        echo 1;
    } else {
        echo 2;
    }
}
function eliminar_viajeterrestres($id)
{
    include './conexion.php';
    $sql = "DELETE FROM viajes_terrestres WHERE id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function editar_viajeterrestres($id, $nombre, $cargo, $correo, $tel, $contra, $rol)
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
