<?php
include("conexion.php");
$mysqli = $conexion;
function tipos_servicios()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipos_servicios";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipos_productos()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_producto";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipos_embalajes()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_embalaje";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipo_mercancias()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_mercancia";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipo_cargas()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_carga";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}


function folio_creacion($folio)
{
    switch ($folio) {
        case $folio <= 9:
            return "000" . $folio;
            break;
        case $folio <= 99 && $folio > 9:
            return "00" . $folio;
            break;
        case $folio <= 999 && $folio > 99:
            return "0" . $folio;
            break;
        case $folio <= 9999 && $folio > 999:
            return $folio;
            break;
    }
}

function operador($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador WHERE id ='$id'";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function tipos_servicio($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipos_servicios WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipos_contenedor($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipos_contenedores WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipos_mercancia($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_mercancia WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function situacion_fiscal($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_mercancia WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result["nombre"];
}

function agencia_aduanal($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM agencias_aduanales WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function tipos_carga($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_carga WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function tipos_plataforma($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_plataforma WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function tipos_producto($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_producto WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function tipos_embalaje($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_embalaje WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function proveedor($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM proveedores WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function cliente($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function clientes()
{
    include 'conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function contratos()
{
    include 'conexion.php';
    $sql = "SELECT * FROM contratos";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function cotizacion()
{
    include 'conexion.php';
    $sql = "SELECT * FROM cotizaciones";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function operadores()
{
    include 'conexion.php';
    $sql = "SELECT * FROM trabajador";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function servicios()
{
    include 'conexion.php';
    $sql = "SELECT * FROM servicios";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function servicio($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM servicios WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function agencias_aduanales()
{
    include 'conexion.php';
    $sql = "SELECT * FROM agencias_aduanales";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function agencias_aduanal($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM agencias_aduanales WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function tipos_mercancias()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_mercancia";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function tipo_mercancia($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_mercancia WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function tipos_plataformas()
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_plataforma";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function tipo_plataforma($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM tipo_plataforma WHERE id =$id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}

function transportes()
{
    include 'conexion.php';
    $sql = "SELECT * FROM transporte";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function transporte($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM transporte WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($result);
}


function viajes_maritimo($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM viajes_maritimos WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}


function viajes_terrestre($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM viajes_terrestres WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function viajes_aereo($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM viajes_aereos WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function viaje_aereo($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM viajes_terrestres WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function importacion($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM importaciones WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function exportacion($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM exportaciones WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function almacenaje($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM almacenaje WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}

function traspaleo($id)
{
    include 'conexion.php';
    $sql = "SELECT * FROM traspaleo WHERE id = $id";
    $result = $GLOBALS["mysqli"]->query($sql);
    return $result;
}
