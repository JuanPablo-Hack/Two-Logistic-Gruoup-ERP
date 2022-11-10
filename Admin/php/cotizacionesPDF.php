<?php
include 'conexion.php';
$id = 4;
$cotizacion = $conexion->query("SELECT * FROM cotizaciones WHERE id = $id");
$datos_cotizacion = $cotizacion->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $datos_cotizacion['id_cliente']);
$datos_cliente = $cliente->fetch_assoc();

$datos_comercial = explode(",", $datos_cliente['datos_comercial']);
$conceptos = explode(",", $datos_cotizacion['conceptos']);
$cantidades = explode(",", $datos_cotizacion['cantidades']);
function getTipoServicio($id)
{
  include 'conexion.php';
  $resultado = $conexion->query("SELECT * FROM tipos_servicios WHERE id =$id");
  return $resultado->fetch_assoc();
}
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
  </style>
  <header class="clearfix">
    <div id="logo">
      <img src="./assets/img/logo.png" />
    </div>
    <h1>Cotización - 01</h1>
    <div id="company" class="clearfix">
      <div><strong>Two logistics</strong></div>
      <div><strong>314-186-6895</strong></div>
      <div><strong>REF.CLIENTE:</strong></div>
      <div>
        <a href="mailto:company@example.com">comercial@twologistic.com</a>
      </div>
    </div>
    <div id="project">
      <div style="border: solid 1px">
        <strong><span>NOMBRE: </span><?php echo $datos_cliente['razon_social'] ?></strong>
      </div>
      <div style="border: solid 1px">
        <strong><span>CONTACTO: </span><?php echo $datos_comercial[0] ?></strong>
      </div>
      <div style="border: solid 1px">
        <strong><span>TEL: </span><?php echo $datos_comercial[2] ?></strong>
      </div>
      <div style="border: solid 1px">
        <strong><span>ADUANA: </span> TEST</strong>
      </div>
      <div style="border: solid 1px">
        <strong><span>EMAIL: </span></strong>
        <a href="mailto:john@example.com"> <?php echo $datos_comercial[1] ?></a>
      </div>
      <div style="border: solid 1px">
        <strong><span>FECHA: </span><?php echo $datos_cotizacion['creado'] ?></strong>
      </div>
    </div>
  </header>
  <main>
    <table style="border: solid 1px">
      <thead style="border: solid 1px; background-color: #2b3f54">
        <tr>
          <th class="service" style="color: white">SERVICIO</th>
          <th class="desc" style="color: white">DESCRIPCIÓN</th>
          <th style="color: white">TARIFA</th>
          <th style="color: white">CANTIDAD</th>
          <th style="color: white">TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for ($i = 0; $i < $datos_cotizacion['no_conceptos']; $i++) {
          $DatosTipoServicio = getTipoServicio($conceptos[$i]);
        ?>
          <tr>

            <td class="service"><?php echo $DatosTipoServicio['nombre'] ?></td>
            <td class="desc">
              <?php echo $DatosTipoServicio['descripcion'] ?>
            </td>
            <td class="unit"><?php echo '$' . number_format($DatosTipoServicio['precio'], 2, '.', ',') ?></td>
            <td class="qty"><?php echo $cantidades[$i] ?></td>
            <td class="total"><?php echo '$' . number_format($cantidades[$i] * $DatosTipoServicio['precio'], 2, '.', ',') ?></td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
    <div id="notices" style="border: solid 1px">
      <div style="border: solid 1px; background-color: #2b3f54">
        <h4 style="color: white">
          <center>TÉRMINOS Y CONDICIONES</center>
        </h4>
      </div>
      <div class="notice">
        <ul>
          <li>Tarifa para carga general (NO Peligroso)</li>
          <li>
            Es importante mencionar que las tarifas ofertadas no incluyen
            maniobras, tramitaciones aduanales, seguro de la mercancía y/o del
            contenedor ni tampoco gastos adicionales ajenos a la operación.
          </li>
          <li>
            El pago de impuestos que cause la mercancía en origen y/o en
            destino será siempre por cuenta del embarcador y/o consignatario.
          </li>
          <li>
            En caso de ser mercancía IMO, estará sujeto a la aprobación de la
            línea Naviera en origen y en destino, así como al recargo
            correspondiente.
          </li>
          <li>
            Los costos pueden cambiar con o sin previo aviso dependiendo de la
            fecha de zarpe.
          </li>
          <li>
            Solicitar el servicio de recolección con 48 hrs de antelación
          </li>
          <li>Flete en falso se cobrará el 100% flete</li>
          <li>Las tarifas propuestas esta expresadas en pesos USD y MXN</li>
          <li>
            Se deberá realizar solicitud de anticipo por la totalidad del
            embarque a realizar. En caso de incurrir en gastos independientes
            a la operación, deberán cubrirse en su totalidad con solicitud
            enviada.
          </li>
          <li>
            Cualquier servicio no especificado en estas tarifas será cotizado
            por separado.
          </li>
          <li>
            Se factura en USD de acuerdo con el TC que corresponda al zarpe
          </li>
          <li>
            De acuerdo con el pago deber ser anticipado y debe quedar cubierto
            al envió del Booking.
          </li>
          <li>
            Considerar que las reservas de Booking se pueden realizar al día
            de la solicitud, solo se debe considerar un tiempo de 24 a 48 hrs
            para la obtención del Booking Confirmation.
          </li>
          <li>Vigencia xxxxxxx</li>
        </ul>
      </div>
    </div>
  </main>
</body>

</html>