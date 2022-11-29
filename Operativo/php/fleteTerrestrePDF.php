<?php
include 'conexion.php';
$id = 1;
$cotizacion = $conexion->query("SELECT * FROM cotizaciones WHERE id = $id");
$datos_cotizacion = $cotizacion->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $datos_cotizacion['id_cliente']);
$datos_cliente = $cliente->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5d6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
        }

        #logo img {
            width: 350px;
        }

        h1 {
            border: solid 1px;
            background-color: #2b3f54;
            color: white;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5d6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #f5f5f5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5d6975;
            border-bottom: 1px solid #c1ced9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        td,
        th {
            border: black 1px solid;
        }

        table td {
            padding: 20px;
            text-align: right;

        }


        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5d6975;
        }

        #notices .notice {
            color: #5d6975;
            font-size: 1.2em;
        }

        footer {
            color: #5d6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #c1ced9;
            padding: 8px 0;
            text-align: center;
        }

        .contacto {
            float: right;
            border-top: 1px solid red;
            border-right: 1px solid red;
            border-bottom: 1px solid red;
            border-left: 1px solid red;
        }
    </style>
    <header class="clearfix">
        <div id="logo">
            <img src="./assets/img/logo.png" />
        </div>
        <h1>Flete Terrestre</h1>
        <div id="company" class="clearfix">
            <div style="border: solid 1px">
                <strong><span>Referencia: </span><?php echo "OTL" . date("Y") . '-' . $id ?></strong>
            </div>
        </div>
        <div id="project">
            <div style="border: solid 1px">
                <strong><span>FECHA: </span><?php echo $datos_cotizacion['creado'] ?></strong>
            </div>
        </div>
    </header>
    <main>
        <table style="border: solid 1px">
            <thead style="border: solid 1px; background-color: #2b3f54">
                <tr>
                    <th class="service" style="color: white; text-align:center;">BL / BKG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service">
                        <ol>
                            <li><strong>CLIENTE: </strong></li>
                            <li><strong>MERCANCIA:</strong></li>
                            <li><strong>AGENCIA ADUANAL:</strong></li>
                            <li><strong>AGENTE/PATENTE:</strong></li>
                            <li><strong>ADUANA: </strong></li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="border: solid 1px">
            <thead style="border: solid 1px; background-color: #2b3f54">
                <tr>
                    <th class="service" style="color: white; text-align:center;">Transporte</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="service">
                        <ol>
                            <li><strong>RAZON SOCIAL: </strong></li>
                            <li><strong>OPERADOR:</strong></li>
                            <li><strong>PLACAS / CAAT:</strong></li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="border: solid 1px">
            <thead style="border: solid 1px; background-color: #2b3f54">
                <tr>
                    <th class="service" style="color: white; text-align:center;">Contenedores</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service">
                        <ol>
                            <li><strong>NO. CONTENEDORES: </strong></li>
                            <li><strong>TIPO DE CONTENEDORES: </strong></li>
                            <li><strong>PESO: </strong></li>
                            <li><strong>IMO: </strong></li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="border: solid 1px">
            <thead style="border: solid 1px; background-color: #2b3f54">
                <tr>
                    <th class="service" style="color: white">Fecha</th>
                    <th class="desc" style="color: white">Observaciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service"></td>
                    <td class="desc">
                    </td>

                </tr>
                <tr>
                    <td class="service"></td>
                    <td class="desc">
                    </td>

                </tr>
                <tr>
                    <td class="service"></td>
                    <td class="desc">
                    </td>

                </tr>
                <tr>
                    <td class="service"></td>
                    <td class="desc">
                    </td>

                </tr>

            </tbody>
        </table>
        <table style="border: solid 1px">
            <thead style="border: solid 1px; background-color: #2b3f54">
                <tr>
                    <th class="service" style="color: white; text-align:center;">Check List</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service">
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Maniobra</label><br>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Soporte</label><br>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Carta de Instrucciones</label><br>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Carta Aporte</label><br>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Pago Cliente</label><br>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox" checked> Pago Proveedor</label><br>
                    </td>
                </tr>
            </tbody>
        </table>



</body>

</html>