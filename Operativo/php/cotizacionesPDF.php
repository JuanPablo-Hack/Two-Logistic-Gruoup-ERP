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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .cabecera {
    background-color: #2b3f54;
    width: 80%;
    height: 100%;
    display: flex;
    border-radius: 0 0 100px 0;
    padding: 10px;
    color: #fff;
    justify-content: space-around;
    align-items: center;
  }

  .cabecera img {
    width: 400px;
    height: 100px;
  }

  .containerInfos {
    justify-content: center;
    align-items: center;
    width: 300px;
    padding: 5px;
  }

  .containerInfo {
    margin-top: 5px;
    display: flex;
    width: 100%;
    align-items: center;
  }

  .containerInfo h1 {
    margin-left: 20px;
  }

  .containerInfo div {
    margin-left: 20px;
  }

  .medioT {
    width: 40px;
    height: 100px;
    background-color: #4db8b0;
    position: absolute;
    top: 0px;
    right: 120px;
    border-radius: 0 0 100px 0;
  }

  .page {
    width: 51%;
    background-color: #4db8b0;
    padding: 30px;
    border-radius: 0 0 100px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 100px;
  }

  .page h1 {
    font-size: 30px;
    color: #fff;
    margin-right: 150px;
  }

  .linea {
    margin: 0 100px;
    color: #000;
  }

  .containerTabla {
    background-color: #4db8b0;
    margin-top: 20px;
    color: #fff;
    display: flex;
    justify-content: space-between;
    margin: 20px 100px;
    padding: 10px 40px;
    border-radius: 50px;
  }

  .containerTabla h1 {
    font-size: 25px;
  }

  .containerTabla2 {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    margin: 20px 100px;
    padding: 10px 40px;
    align-items: center;
  }

  .containerTabla2 p {
    font-size: 18px;
  }

  .fontweight {
    font-weight: bold;
  }

  .containerVacio {
    height: 100px;
    margin: 20px 100px 40px 100px;
    background-color: #eff0f2;
  }

  .terminos {
    display: flex;
    position: absolute;
    background-color: #2b3f54;
    margin: -12px 100px;
    width: 30%;
    padding: 10px 25px;
    border-radius: 50px;
    color: #fff;
  }

  .terminos p {
    font-size: 25px;
  }

  .terminos2 {
    display: flex;
    position: absolute;
    background-color: #4db8b0;
    margin: -15px 100px;
    width: 27%;
    padding: 12px 25px;
    border-radius: 50px;
    color: #fff;
  }

  .terminos2 p {
    font-size: 25px;
  }

  .containerTerminos {
    background-color: #eff0f2;
    margin: 10px 100px;
    padding: 60px 20px 35px 20px;
  }

  .textInfo {
    margin: 0 100px;
    margin-top: 25px;
    font-weight: bold;
  }

  .clienteInfo {
    position: absolute;
    right: 270px;
    top: 195px;
    width: 300px;
  }

  .clienteInfo p {
    font-size: 25px;
    font-weight: bold;
  }

  .cliente {
    display: flex;
    width: 100%;
    margin-top: 5px;
    justify-content: space-between;
  }

  .footer {
    margin-top: 30px;
    width: 50%;
    height: 30px;
    background-color: #4db8b0;
    position: absolute;
    right: 0;
    border-radius: 20px 0 0 0;
  }

  @media (max-width: 1276px) {
    .terminos p {
      font-size: 20px;
    }

    .terminos2 p {
      font-size: 20px;
    }
  }

  @media (max-width: 1120px) {
    .medioT {
      width: 40px;
      height: 100px;
      background-color: #4db8b0;
      position: absolute;
      top: 0px;
      right: 90px;
      border-radius: 0 0 100px 0;
    }

    .clienteInfo {
      right: 180px;
    }

    .clienteInfo p {
      font-size: 20px;
      font-weight: bold;
    }
  }

  @media (max-width: 956px) {
    .terminos p {
      font-size: 17px;
    }

    .terminos2 p {
      font-size: 17px;
    }

    .medioT {
      right: 50px;
    }

    .clienteInfo {
      right: 120px;
    }

    .clienteInfo p {
      font-size: 18px;
      font-weight: bold;
    }
  }

  @media (max-width: 750px) {
    .cabecera img {
      width: 400px;
      height: 100px;
    }

    .page {
      width: 50%;
      background-color: #4db8b0;
      margin-bottom: 100px;
    }

    .page h1 {
      font-size: 18px;
      color: #fff;
      margin-left: 100px;
    }

    .linea {
      margin: 0 10px;
    }

    .textInfo {
      margin: 0 10px;
      margin-top: 25px;
      font-size: 15px;
    }

    .containerInfo {
      display: none;
    }

    .clienteInfo {
      top: 150px;
      right: 50px;
    }

    .clienteInfo p {
      font-size: 15px;
      font-weight: bold;
    }

    .containerTabla {
      margin: 20px 5px;
    }

    .containerTabla h1 {
      font-size: 18px;
    }

    .containerTabla2 {
      margin: 20px 5px;
    }

    .containerTabla2 div p {
      font-size: 15px;
    }

    .containerVacio {
      margin: 20px 10px 40px 10px;
    }

    .terminos {
      margin: 0 10px;
      width: 70%;
    }

    .terminos p {
      font-size: 18px;
    }

    .terminos2 {
      margin: 0 10px;
      width: 50%;
    }

    .terminos2 p {
      font-size: 18px;
    }

    .containerTerminos {
      margin: 10px 10px;
    }

    .containerTerminos p {
      font-size: 15px;
    }
  }

  @media (max-width: 450px) {
    .cabecera img {
      width: 400px;
      height: 50px;
    }

    .medioT {
      display: none;
    }

    .page {
      width: 50%;
      background-color: #4db8b0;
      margin-bottom: 150px;
    }

    .page h1 {
      font-size: 10px;
      color: #fff;
      margin-left: 100px;
    }

    .linea {
      margin: 0 10px;
    }

    .textInfo {
      margin: 0 10px;
      margin-top: 25px;
      font-size: 12px;
    }

    .containerInfo {
      display: none;
    }

    .clienteInfo {
      right: 50px;
    }

    .clienteInfo p {
      font-size: 15px;
      font-weight: bold;
    }

    .containerTabla {
      margin: 20px 5px;
    }

    .containerTabla h1 {
      font-size: 13px;
    }

    .containerTabla2 {
      margin: 20px 5px;
    }

    .containerTabla2 div p {
      font-size: 10px;
    }

    .containerVacio {
      margin: 20px 10px 40px 10px;
    }

    .terminos {
      margin: 0 10px;
      width: 70%;
    }

    .terminos p {
      font-size: 15px;
    }

    .terminos2 {
      margin: 0 10px;
      width: 50%;
    }

    .terminos2 p {
      font-size: 15px;
    }

    .containerTerminos {
      margin: 10px 10px;
    }

    .containerTerminos p {
      font-size: 13px;
    }
  }
</style>

<body>
  <div class="cabecera">
    <img src="./assets/img/BLANCO.png" alt="logo">
    <div class="containerInfos">
      <div class="containerInfo">
        <i class="fa-sharp fa-solid fa-phone-volume" style="color: #fff;"></i>
        <h1>314 357 8752</h1>
      </div>
      <div class="containerInfo">
        <i class="fa-solid fa-location-dot" style="color: #fff;"></i>
        <div>
          <p>AV. MANZANILLO 35 – B</p>
          <p>COL. NUEVO SALAGUA </p>
          <p>MANZANILLO, COLIMA, MEX.</p>
          <p>C.P. 28869 </p>
        </div>
      </div>
    </div>
  </div>
  <div class="page">
    <h1>WWW.TWOLOGISTIC.COM</h1>
  </div>
  <hr class="linea">
  <p class="textInfo">
    Por este conducto, nos permitimos hacerle llegar la presente
    cotización por nuestros servicios de Flete terrestre en modalidad caja seca
    53` y termos por la Aduana de Manzanillo:
  </p>
  <div class="containerTabla">
    <h1>CONCEPTO</h1>
    <h1>DESCRIPCIÓN</h1>
    <h1>PRECIO</h1>
  </div>
  <div class="containerTabla2">
    <?php
    for ($i = 0; $i < $datos_cotizacion['no_conceptos']; $i++) {
      $DatosTipoServicio = getTipoServicio($conceptos[$i]);
    ?>
      <div>
        <p class="fontweight"><?php echo $DatosTipoServicio['nombre'] ?></p>
      </div>
      <div>
        <p> <?php echo $DatosTipoServicio['descripcion'] ?></p>
      </div>
      <div>
        <p class="fontweight"><?php echo '$' . number_format($DatosTipoServicio['precio'], 2, '.', ',') ?></p>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="containerVacio">
  </div>
  <div class="terminos">
    <p>TERMINOS Y CONDICIONES: </p>
  </div>
  <div class="containerTerminos">
    <p>• Estos precios son más IVA (16%)</p>
    <p>• NO incluye seguro de mercancías, seguro de contenedor, maniobras de ningún tipo. </p>
    <p>• Todas nuestras unidades cuentan con rastreo satelital en tracto</p>
    <p>
      • Tienen 12 horas libres para carga y descarga de las unidades, después de ese tiempo se generarían estadías a razón de $5,500.00 más IVA por día
      o fracción.
    </p>
    <p>• Costo por día de pernoctaje en origen $4,500.00.</p>
    <p>
      • Las mercancías y el(los) contenedor(es) viajan por cuenta y riesgo del cliente, ya que la tarifa ofertada y pactada no incluye el seguro, la responsabilidad de EL TRANSPORTISTA por daños, averías o pérdidas queda expresamente limitada de conformidad con los artículos 66 y 67 de la Ley de
      Caminos, Puentes y Autotransporte Federal vigente.
    </p>
  </div>
  <div class="terminos2">
    <p>FORMA DE PAGO: </p>
  </div>
  <div class="containerTerminos">
    <p>• No se cuenta con crédito y los servicios deberán ser cubiertos con anticipo de la totalidad de la operación.</p>
  </div>
  <div class="terminos">
    <p>VIGENCIA: </p>
  </div>
  <div class="containerTerminos">
    <p>• Todos los costos mencionados son más IVA y las tarifas cuentan con una vigencia al 31 de diciembre 2023.</p>
  </div>
  <div class="footer">

  </div>


  <div class="clienteInfo">
    <div class="cliente">
      <p>CLIENTE</p>
      <p><?php echo $datos_cliente['razon_social'] ?></p>
    </div>
    <div class="cliente">
      <p>CONTACTO</p>
      <p><?php echo $datos_comercial[2] ?></p>
    </div>
    <div class="cliente">
      <p>FECHA</p>
      <p><?php echo $datos_cotizacion['creado'] ?></p>
    </div>
  </div>
  <div class="medioT">

  </div>
</body>
<script src="https://kit.fontawesome.com/ce214fef7b.js" crossorigin="anonymous"></script>
</html>