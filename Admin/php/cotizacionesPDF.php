<?php
include 'conexion.php';
$id = $_POST['id'];
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
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
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

  .containerTitulo {
    display: flex;
    flex-direction: row;
    width: 70%;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
    margin: auto;
    margin-bottom: 20px;
  }

  .containerTitulo img {
    width: 150px;
    height: 80px;
  }

  #containerTitulos {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    color: #44546A;
  }

  #containerTitulos h1 {
    color: #44546A;
    margin-bottom: -22px;
  }

  .containerHeader {
    margin-bottom: -20px;
    margin-top: 30px;
    display: flex;
    width: 70%;
    justify-content: center;
    height: 45px;
    background-color: #44546A;
    color: #FFF;
    margin: auto;
  }

  .containerHeader p {
    font-size: 18px;
  }

  #containerTabla {
    margin-top: 20px;
    width: 70%;
    align-items: center;
    border: 1px solid;
    border-collapse: collapse;
    margin: auto;
    margin-bottom: 20px;
  }

  #containerTabla tbody tr td {
    text-align: center;
    border: 1px solid;
    font-size: 17px;
    padding: 3px;
  }

  #containerTabla tbody tr td:nth-child(odd) {
    background-color: #44546A;
    border-color: black;
    color: #FFF;
  }

  #containerTabla2 {
    width: 70%;
    margin: auto;
    border: 1px solid;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  #containerTabla2 thead tr th {
    border: 1px solid;
    background-color: #44546A;
    padding: 10px 5px;
  }

  #containerTabla2 thead tr th:nth-child(even) {
    border-color: #000;
    color: #FFF;
  }

  #containerTabla2 thead tr th:nth-child(odd) {
    border-color: #000;
    color: #FFF;
  }

  #containerTabla2 tbody tr:nth-child(odd) {
    background-color: #EDEDED;
  }

  #containerTabla2 tbody tr td {
    padding: 10px;
    text-align: center;
    font-size: 17px;
  }

  .containerTabla34 {
    width: 70%;
    margin: auto;
    border: 1px solid;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .containerTabla34 tbody tr td {
    font-size: 17px;
    padding: 5px;
  }
</style>

<body>
  <div class="containerTitulo">
    <img src="./assets/cocacola-logo.jpg" alt="">
    <div id="containerTitulos">
      <h1>Cotización de Servicio</h1>
      <h3>Anexo comercial</h3>
    </div>
  </div>
  <div class="containerHeader">
    <p>Datos del cliente</p>
  </div>
  <table id="containerTabla">
    <tbody>
      <tr>
        <td>Razon social:</td>
        <td><?php echo $datos_cliente['razon_social'] ?></td>
        <td class="color">Referencia:</td>
        <td><?php echo $id ?></td>
      </tr>
      <tr>
        <td>Contacto:</td>
        <td><?php echo $datos_comercial[0] ?></td>
        <td class="color">Fecha:</td>
        <td><?php echo $datos_cotizacion['creado'] ?></td>
      </tr>
      <tr>
        <td>RFC:</td>
        <td><?php echo $datos_cliente['rfc'] ?></td>
        <td class="color">Aduana:</td>
        <td>Mazanillo</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><?php echo $datos_comercial[1] ?></td>
        <td class="color">Tel/Cel</td>
        <td><?php echo $datos_comercial[2] ?></td>
      </tr>
    </tbody>
  </table>

  <div class="containerHeader">
    <p>Propuesta Economica</p>
  </div>
  <table id="containerTabla2">
    <thead>
      <tr>
        <th>Servicio</th>
        <th>Descripcion</th>
        <th>Tarifa</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < $datos_cotizacion['no_conceptos']; $i++) {
        $DatosTipoServicio = getTipoServicio($conceptos[$i]);
      ?>
        <tr>
          <td><?php echo $DatosTipoServicio['nombre'] ?></td>
          <td>
            <?php echo $DatosTipoServicio['descripcion'] ?>
          </td>
          <td><?php echo '$' . number_format($DatosTipoServicio['precio'], 2, '.', ',') ?></td>
          <td><?php echo $cantidades[$i] ?></td>
          <td><?php echo '$' . number_format($cantidades[$i] * $DatosTipoServicio['precio'], 2, '.', ',') ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <div class="containerHeader">
    <p>Condiciones Especiales Del Servicio</p>
  </div>
  <table class="containerTabla34">
    <tbody>
      <tr>
        <td>1.-Se cuenta con credito de 15 dias a partir del envio de la factura</td>
      </tr>
      <tr>
        <td>2.- 21 días libres de demoras</td>
      </tr>
      <tr>
        <td>3.- Servicio LINER</td>
      </tr>
    </tbody>
  </table>

  <div class="containerHeader">
    <p>Términos y Condiciones</p>
  </div>
  <table class="containerTabla34">
    <tbody>
      <tr>
        <td>• Tarifa son más IVA</td>
      </tr>
      <tr>
        <td>• Es importante mencionar que las tarifas ofertadas no incluyen maniobras, tramites aduanales,
          seguro de la mercancía y/o del contenedor ni tampoco gastos adicionales ajenos a la operación.</td>
      </tr>
      <tr>
        <td>• El pago de impuestos que cause la mercancía en origen y/o en destino será siempre por cuenta del
          embarcador y/o consignatario.</td>
      </tr>
      <tr>
        <td>• En caso de ser mercancía IMO, estará sujeto a la aprobación de la línea Naviera en origen y en
          destino, así como al recargo correspondiente.</td>
      </tr>
      <tr>
        <td>• Los costos pueden cambiar sin previo aviso dependiendo de la fecha de zarpe.</td>
      </tr>
      <tr>
        <td>• Solicitar el servicio de recolección con 48 hrs de antelación</td>
      </tr>
      <tr>
        <td>• Flete en falso se cobrará el 100% flete</td>
      </tr>
      <tr>
        <td>• Las tarifas propuestas esta expresadas en pesos MXN</td>
      </tr>
      <tr>
        <td>• Las tarifas propuestas esta expresadas en USD</td>
      </tr>
      <tr>
        <td>• Se deberá realizar solicitud de anticipo por la totalidad del embarque a realizar. En caso de
          incurrir en gastos independientes a la operación, deberán cubrirse en su totalidad con solicitud
          enviada.</td>
      </tr>
      <tr>
        <td>• Cualquier servicio no especificado en estas tarifas será cotizado por separado.</td>
      </tr>
      <tr>
        <td>• Se factura en USD de acuerdo con el TC que corresponda al zarpe</td>
      </tr>
      <tr>
        <td>• De acuerdo con el pago deber ser anticipado y debe quedar cubierto al envió del Booking.</td>
      </tr>
      <tr>
        <td>• Vigencia xxxxxx </td>
      </tr>
      <tr>
        <td>• Considerar que las reservas de Booking se pueden realizar al día de la solicitud, solo se debe
          considerar un tiempo de 24 a 48 hrs para la obtención del Booking Confirmation.</td>
      </tr>
    </tbody>
  </table>
</body>

</html>