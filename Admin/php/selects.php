<?php
function tipos_servicios()
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipos_servicios";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_servicio($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipos_servicios WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_contenedor($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipos_contenedores WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_mercancia($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipo_mercancia WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function agencia_aduanal($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM agencias_aduanales WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_carga($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipo_carga WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_plataforma($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipo_plataforma WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_producto($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipo_producto WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function tipos_embalaje($id)
{
    include 'conexion.php';
    $sql2 = "SELECT * FROM tipo_embalaje WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
    return $result2;
}

function clientes()
{
    include 'conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    return $result;
}
