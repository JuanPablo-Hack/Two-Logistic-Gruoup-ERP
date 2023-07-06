<?php
include_once 'conexion.php';

$id = $_POST['id'];

$contratos = $conexion->query("SELECT * FROM contratos WHERE id = $id");
$contratos_data = $contratos->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $contratos_data['id_cliente']);
$clientef = $cliente->fetch_assoc();

$datos_comercial = explode(",", $clientef['datos_comercial']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
  }

  .containerHeader {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 100px;
  }

  .containerHeader p {
    font-size: 16px;
    font-weight: bold;
  }

  .containerDeclaraciones {
    padding: 10px 80px;
  }

  .containerDeclaraciones p {
    margin-top: 20px;
  }

  .declaraciones {
    font-weight: bold;
  }

  .abc {
    display: flex;
    width: 100%;
    padding: 0 20px;
  }

  .abc p {
    line-height: 1.5;
    text-align: justify;
  }

  .color {
    font-size: 15px;
    font-weight: bold;
    margin-right: 10px;
  }

  .negritas {
    width: 100%;
  }

  .color2 {
    font-weight: bold;
  }

  .interlineado {
    line-height: 1.5;
  }

  .unodostres {
    display: flex;
    width: 100%;
    padding: 0 50px;
  }

  .unodostres p {
    line-height: 1.5;
    text-align: justify;
  }

  .firmas1 {
    width: 100%;
    display: flex;
    justify-content: space-around;
  }

  .color3 {
    font-weight: bold;
    width: 50%;
    text-align: center;
  }

  .firma {
    margin: 40px 10px 0 10px;
    width: 100%;
    height: 2px;
    background-color: #000;
  }
</style>

<body>
  <div class="containerHeader">
    <p>
      CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE POR VÍA TERRESTRE QUE
      CELEBRAN POR UNA PARTE TWO LOGISTIC SOLUCIONES INTERNACIONALES S DE RL
      DE CV., REPRESENTADA POR NORMA YASMIN FREGOSO VELASCO, A QUIEN EN LO
      SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO SE LE DENOMINARA COMO
      “EL PORTEADOR” Y POR LA OTRA <strong>
        <p style="text-transform: uppercase;">"<?php echo $clientef['razon_social'] ?>"</p>
      </strong>,
      REPRESENTADA POR <strong>
        <p style="text-transform: uppercase;">"<?php echo $datos_comercial[0] ?>"</p>
      </strong>, A QUIEN EN
      LO SUCESIVO SE LE DENOMINARA “EL CARGADOR”, Y A QUIENES DE MANERA
      CONJUNTA SE LES DENOMINARA “LAS PARTES”, POR LO QUE CONVIENEN EN
      CELEBRAR EL PRESENTE CONTRATO AL TENOR DE LAS SIGUIENTES:
    </p>
  </div>
  <div class="containerDeclaraciones">
    <h3>
      <center>DECLARACIONES</center>
    </h3>
    <p class="declaraciones">
      Declara EL PORTEADOR por medio de sus representantes:
    </p>
    <div class="abc">
      <p class="color">a)</p>
      <p>
        Que es una Sociedad Anónima, legalmente constituida conforme a las
        leyes mexicanas según consta en Escritura Pública Número 19,819, de
        fecha 26 de enero de 2022, pasada ante la fe del Notario Público
        Número 03, Lic. Marcelino Romero Vargas, con ejercicio en la Ciudad y
        Puerto de Manzanillo, Colima., misma que quedó debidamente inscrita en
        el Registro Público de la Propiedad y del Comercio de la misma ciudad,
        siendo su objeto social principal el de La operación y explotación del
        servicio de carga pública federal.
      </p>
    </div>
    <div class="abc">
      <p class="color">b)</p>
      <p>
        Su representante cuenta con las facultades suficientes para celebrar
        el presente contrato, mismas que a la fecha no le han sido limitadas,
        modificadas o revocadas de forma alguna, según se desprende de la
        Escritura Pública Número 19,819, de fecha 26 de enero de 2022, pasada
        ante la fe del Notario Público Número 03, Lic. Marcelino Romero
        Vargas, con ejercicio en la Ciudad y Puerto de Manzanillo, Colima.
        misma que quedó debidamente inscrita en el Registro Público de la
        Propiedad y del Comercio de la misma ciudad.
      </p>
    </div>
    <div class="abc">
      <p class="color">c)</p>
      <p>
        Que el domicilio convencional de EL PORTEADOR para oír y recibir toda
        clase de notificaciones, así como el cumplimiento de todas las
        obligaciones que deriven del presente, se encuentra ubicado en Av. El
        dorado No.230-B colonia Nuevo Salagua, C.P 28869 Manzanillo, Colima.
        México
      </p>
    </div>
    <p class="declaraciones">
      Declara EL CARGADOR por medio de sus representantes:
    </p>
    <div class="abc">
      <p class="color">c)</p>
      <p>
        Ser una Sociedad de Responsabilidad Limitada de Capital Variable,
        legalmente constituida y válidamente existente conforme a las leyes
        mexicanas según consta en Escritura Pública Número --------, de fecha
        -------------------------, pasada ante la fe del, Lic.
        ----------------------------------------, Notario Público número
        --------- - con ejercicio en
        -----------------------------------------, siendo su objeto social
        principal el de -------------------------------------------------;
        ajustándose en todo tiempo, en principio, a las Leyes Mexicanas
        aplicables al Ramo, a la Ley de Comercio Exterior, en su caso, así
        como a los Tratados Internacionales.
      </p>
    </div>
    <div class="abc">
      <p class="color">c)</p>
      <p>
        Su representante <?php echo $datos_comercial[0] ?>, cuenta con las facultades
        suficientes para celebrar el presente contrato, mismas que a la fecha
        no le han sido limitadas, modificadas o revocadas de forma alguna,
        según se desprende de la Escritura Pública Número ---------- de fecha
        -------------------------, otorgada ante la fe del Licenciado
        ----------------------- Titular de la Notaría Pública Número -----,
        con ejercicio en ------------------------------------.
      </p>
    </div>
    <div class="abc">
      <p class="color">c)</p>
      <p>
        Que el domicilio convencional de EL CARGADOR para oír y recibir toda
        clase de notificaciones, así como el cumplimiento de todas las
        obligaciones que deriven del presente, se encuentra ubicado en
        <?php echo $clientef['domicilio'] ?>.
      </p>
    </div>
    <p class="declaraciones">Declaran LAS PARTES en conjunto:</p>
    <div class="abc">
      <p class="color">a)</p>
      <p>
        Que BAJO PROTESTA DE DECIR VERDAD tienen la representación legal y
        cuentan a la fecha con las facultades necesarias y suficientes para la
        celebración de este acto, mismas que se contienen en Actas, Documentos
        y/o Testimonios Públicos Legales de sus respectivos representados y
        que en caso de Revocación o Limitación posterior a este Instrumento,
        harán del conocimiento inmediato a la otra parte, por escrito u otro
        medio indubitable: por lo tanto se reconocen mutuamente su
        Personalidad y capacidad Jurídica, en aras de la Buena fe y los usos y
        costumbres comerciales para la celeridad del trato que celebran.
      </p>
    </div>
    <p style="margin-bottom: 20px">
      Enteradas las partes de las anteriores declaraciones, sujetan el
      presente contrato al tenor de las siguientes:
    </p>
    <h3>
      <center>Clausulas</center>
    </h3>
    <p class="interlineado">
      <strong>PRIMERA.- OBJETO DEL SERVICIO. EL PORTEADOR</strong> se obliga
      por el presente, al transporte de los bienes y objetos permitidos por la
      legislación Federal, Común y los Tratados internacionales; garantizando
      a <strong>EL CARGADOR </strong>que es capaz y competente para desempeñar
      la obligación contraída baja este instrumento y que cumplirá conforme a
      las normas de eficiencia y seguridad las labores para las cuales se le
      requirió; obligándose ambos a utilizar exclusivamente el idioma español
      en toda la documentación relativa al servicio solicitado. Página 3 de 7
      Por lo que <strong>EL PORTEADOR</strong>, será responsable de poner las
      cosas transportadas, en el estado en que las recibe, a disposición del
      consignatario que sea señalado por <strong>EL CARGADOR</strong>, en el
      plazo, lugar y condiciones previstas en el presente contrato.
    </p>
    <p class="interlineado">
      <strong>SEGUNDA.- VIGENCIA.</strong> El presente contrato tendrá
      vigencia de un año contado a partir de la firma, mismo que podrá
      prorrogarse por el mismo tiempo previo acuerdo de las partes.
    </p>
    <p>
      <strong>TERCERA.- OBLIGACIONES.</strong> EL PORTEADOR, se obliga de
      manera enunciativa más no limitativa a lo siguiente:
    </p>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        Suministrar todas las provisiones, abastecimientos, salarios,
        honorarios y gastos de representación que correspondan a los vehículos
        y choferes así como los relativos al traslado de los bienes objeto del
        servicio.
      </p>
    </div>
    <div class="abc">
      <p class="color">b.</p>
      <p>
        Los bienes u objetos se transportarán a riesgo y cuenta de EL
        CARGADOR, con las excepciones previstas en los artículos 66, 67 y 69
        de la Ley de Caminos, Puentes y Autotransporte Federal; pero EL
        PORTEADOR mantendrá vigentes los seguros que sean necesarios y que
        amparen daños materiales de los vehículos y los que puedan cometerse a
        terceros.
      </p>
    </div>
    <div class="abc">
      <p class="color">c.</p>
      <p>A recibir las mercancías en el tiempo y lugar convenidos;</p>
    </div>
    <div class="abc">
      <p class="color">d.</p>
      <p>
        A emprender y concluir el viaje dentro del plazo estipulado,
        precisamente por el camino que se señale el contrato si es el caso;
      </p>
    </div>
    <div class="abc">
      <p class="color">e.</p>
      <p>
        A verificar el viaje, desde luego, si no hay término ajustado; y en el
        más próximo a la fecha del contrato, si acostumbrare hacerlos
        periódicamente;
      </p>
    </div>
    <div class="abc">
      <p class="color">f.</p>
      <p>
        A cuidar y conservar las mercancías bajo su exclusiva responsabilidad,
        desde que las reciba hasta que las entregue a satisfacción del
        consignatario designado por <strong>EL CARGADOR;</strong>
      </p>
    </div>
    <div class="abc">
      <p class="color">g.</p>
      <p>
        A entregar las mercancías al tenedor de la carta de porte o de la
        orden respectiva en defecto de ella, entregada por
        <strong>EL CARGADOR;</strong>
      </p>
    </div>
    <div class="abc">
      <p class="color">g.</p>
      <p>
        A entregar las mercancías por peso, cuenta y medida, si así están
        consideradas en la carta de porte, a no ser que estén en barricas,
        cajones o fardos, pues entonces cumplirá con entregar éstos sin lesión
        exterior;
      </p>
    </div>
    <div class="abc">
      <p class="color">g.</p>
      <p>
        A probar que las pérdidas o averías de las mercancías, o el retardo en
        el viaje, no han sido por causa, culpa o negligencia de EL PORTEADOR,
        cuando éste alegue que dichas pérdidas o averías de las mercancías, no
        fueron generadas por su responsabilidad en esos acontecimientos;
      </p>
    </div>
    <p>
      <strong>EL CARGADOR.- </strong>Se obliga a lo convenido en este
      instrumento, y a lo dispuesto por las leyes y reglamentos mexicanos
      aplicables y a lo estipulado en la Carta Porte, así como a lo siguiente:
    </p>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        A entregar las mercancías en las condiciones, lugar y tiempo
        convenidos;
      </p>
    </div>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        A dar los documentos necesarios, así fiscales como municipales para el
        libre tránsito y pasaje de la carga;
      </p>
    </div>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        A sufrir las pérdidas y averías de las mercancías que procedan de
        vicio propio de ellas o de casos fortuitos, salvo lo dispuesto en los
        incisos IX y X del art. 590 del Código de Comercio vigente en el país;
      </p>
    </div>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        A remitir con oportunidad la carta de porte al consignatario, de
        manera que pueda hacer uso de ella al tiempo de llegar la carga a su
        final destino, la cual contendrá los siguientes requisitos:
      </p>
    </div>
    <div class="unodostres">
      <p class="color">1.</p>
      <p>El nombre, apellido y domicilio del cargador;</p>
    </div>
    <div class="unodostres">
      <p class="color">2.</p>
      <p>El nombre, apellido y domicilio del porteador;</p>
    </div>
    <div class="unodostres">
      <p class="color">3.</p>
      <p>
        El nombre, apellido y domicilio de la persona a quien o a cuya orden
        vayan dirigidos los efectos, o si han de entregarse al portador de la
        misma carta;
      </p>
    </div>
    <div class="unodostres">
      <p class="color">4.</p>
      <p>
        La designación de los efectos, con expresión de su calidad genérica,
        de su peso y de las marcas o signos exteriores de los bultos en que se
        contengan;
      </p>
    </div>
    <div class="unodostres">
      <p class="color">5.</p>
      <p>El precio del transporte;</p>
    </div>
    <div class="unodostres">
      <p class="color">6.</p>
      <p>La fecha en que se hace la expedición;</p>
    </div>
    <div class="unodostres">
      <p class="color">7.</p>
      <p>El lugar de la entrega al porteador;</p>
    </div>
    <div class="unodostres">
      <p class="color">8.</p>
      <p>
        El lugar y el plazo en que habrá de hacerse la entrega al
        consignatario;
      </p>
    </div>
    <div class="unodostres">
      <p class="color">9.</p>
      <p>
        La indemnización que haya de abonar el porteador en caso de retardo,
        si sobre este punto mediare algún pacto.
      </p>
    </div>
    <p>
      <strong>CUARTA.- FUERZA MAYOR.</strong> Ni
      <strong> EL CARGADOR</strong>, ni <strong>EL PORTEADOR,</strong> ni sus
      representantes ni su personal serán responsables por cualquier perdida,
      retrasos o daños ocasionados por caso fortuito, o fuerza mayor,
      condiciones climatológicas adversas de tiempo, actos de guerra, enemigos
      públicos, delincuencia, por restricciones de cualquier gobierno, por
      embargos, motín o asonada civil, por epidemias o cuarentenas, quedando
      dispensados de sus obligaciones estipuladas en este servicio de
      transporte, situación que otorgara a <strong></strong> y/o a
      <strong>El PORTEADO</strong> el derecho de rescindirlo. No se consideran
      caso fortuito o fuerza mayor, cualquier acontecimiento resultante de
      alguna falta de previsión o negligencia por alguna de
      <strong>LAS PARTES</strong>.
    </p>
    <p>
      <strong>QUINTA.- ESPACIO DISPONIBLE PARA EL CARGADOR. EL PORTEADOR</strong>
      garantiza que todos los compartimientos del vehículo y/o espacios de
      carga y/o transporte al momento de realizar el servicio a
      <strong>El CARGADOR</strong> y durante toda la vigencia del servicio,
      estarán en condiciones óptimas de operación y limpieza, quedando
      exclusivamente a disposición de
      <strong>El CARGADOR. EL PORTEADOR</strong> deberá incluir servicio de
      Tecnología de Punta (Rastreo Satelital), cuyo costo se entenderá
      incluido en el servicio de conformidad al tarifario previamente
      convenido entre las Partes.
    </p>
    <p>
      <strong>SEXTA.- RESCISION DEL SERVICIO. EL CARGADOR</strong> podrá en
      todo momento rescindir el servicio, para lo cual deberá dar aviso a
      <strong>EL PORTEADOR</strong> ya sea antes o después de comenzarse el
      viaje, pagando a <strong>EL PORTEADOR</strong>, la indemnización que
      para tal efecto establezca el tarifario correspondiente, y siendo
      obligación suya recibir los efectos en el punto y en el día en que la
      rescisión se verifique. Si no cumpliere con esa obligación, o no
      cubriere el porte al contado, el contrato no quedará rescindido, salvo
      si se dieran cualquiera de las siguientes causas, por lo que dicha
      rescisión operara de inmediato sin necesidad de declaración judicial:
    </p>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        Si <strong>EL PORTEADOR</strong> no inicia el servicio de transporte
        en la fecha acordada por escrito.
      </p>
    </div>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        Si <strong>EL PORTEADOR</strong> suspende la prestación de los
        servicios por cualquier causa que le sea imputable a este.
      </p>
    </div>
    <div class="abc">
      <p class="color">a.</p>
      <p>
        Si <strong>EL PORTEADOR</strong> en violación de cualquier ley,
        reglamento o por disposición gubernamental, que este en vigor durante
        la vigencia del servicio, o por falta de algún permiso por causa que
        le sea imputable, está imposibilitado para continuarlo.
      </p>
    </div>
    <p>
      A su vez <strong>EL PORTEADOR</strong> podrá rescindirlo en todo tiempo
      si:
    </p>
    <p>
      Los bienes a transportar en favor de <strong>EL CARGADOR</strong> no
      estén permitidos por las leyes o incumplan con las especificaciones
      legales correspondientes o tengan alguna anomalía de tipo legal,
      administrativo comercial o de origen que pudiera afectar en cualesquier
      forma a <strong>EL PORTEADOR</strong>. No obstante lo anterior,
      <strong>EL PORTEADOR</strong> tendrá en todo momento la obligación de
      revisar toda la documentación y especificaciones legales provistas por
      <strong>EL CARGADOR.</strong>
    </p>
    <p>
      En general por el incumplimiento de alguna o ambas partes a cualquiera
      de las obligaciones derivadas de este servicio y sus anexos, a las leyes
      y reglamentos aplicables
    </p>
    <p>
      <strong>SEPTIMA.- IMPUESTOS.</strong> Cada parte conviene en pagar todas
      y cada una de las contribuciones y demás cargas fiscales que conforme a
      las leyes federales y estatales, tengan la obligación de cubrir durante
      la vigencia, ejecución y cumplimiento del presente servicio de
      transporte de carga.
    </p>
    <p>
      <strong> OCTAVA.- TARIFARIO.-</strong> Se incluye el anexo 1 TARIFARIO
      en el que se establecerán los montos pactados para la prestación del
      servicio, el cual incluirá las indemnizaciones que habrán de pagarse en
      caso de a) retardo en la entrega, b) retardo en la descarga, y
      cancelación de servicio. Estas tarifas mencionadas en el anexo pueden
      llegar a variar de acuerdo a la inflación, aumento de combustible,
      casetas entre otros.
    </p>
    <p>
      <strong>NOVENA.- JURISDICCION Y COMPETENCIA.</strong> El presente
      contrato se regirá por lo establecido en el por
      <strong>LAS PARTES</strong>; en lo no previsto por ellas, por lo
      dispuesto en el Código de Comercio, leyes especiales, así como usos
      mercantiles aplicables, por lo que sus condiciones no son limitativas,
      sino enunciativas; conviniendo en que para resolver cualquier cuestión
      derivada de lo pactado, su interpretación y cumplimiento, las Partes se
      someten expresamente a las Autoridades Competentes que conforme a su
      Potestad ejerzan Jurisdicción en el municipio de
      <strong>la Ciudad de Manzanillo</strong>, Colima, a efecto de resolver
      cualquier controversia o litigio por lo que renuncian a cualquier fuero
      distinto, que por razón de sus domicilios presentes o futuros pudiera
      corresponderles. Entregado por cualquier vía el presente documento,
      <strong>LAS PARTES</strong> quedan enteradas del contenido, valor y
      consecuencias legales todas y cada una de sus condiciones, por lo que la
      mera solicitud del servicio, la entrega y recepción de los bienes u
      objetos, materia del mismo entre ambas, implican su aceptación tácita,
      sin que sea necesaria la firma autógrafa, acordando lo anterior es
      suficiente para que surta sus efectos.
    </p>
    <p>
      <strong> DECIMA.- LAS PARTES</strong> convienen que este Contrato y sus
      Anexos contienen su voluntad expresa en cuanto a lo que en los mismos se
      especifica, cualquier otro Convenio, Contrato o arreglo en forma verbal
      o escrita que se haya elaborado o que tácitamente pudiera implicarse
      queda desde ahora sin efectos; las posteriores modificaciones que se
      realicen a este documento deberán ser por escrito y firmadas por ambas
      partes.
    </p>
    <p style="margin-bottom: 50px">
      Habiendo sido leído el presente Contrato por
      <strong>LAS PARTES</strong> y enteradas del contenido y alcance legal de
      cada una de sus estipulaciones, lo firman por duplicado, en presencia de
      dos testigos que lo suscriben en la Ciudad de Manzanillo, Colima, al día
      "<?php echo $contratos_data["creado"] ?>".
    </p>
    <div class="firmas1">
      <p class="color3">
        POR “EL PORTEADOR” TWO LOGISTIC SOLUCIONES INTERNACIONALES S D RL DE
        CV
      </p>
      <p class="color3">
        POR “EL CARGADOR” <br />
        <?php echo $datos_comercial[0] ?>
      </p>
    </div>
    <div class="firmas1">
      <div class="firma"></div>
      <div class="firma"></div>
    </div>
    <div class="firmas1">
      <p class="color3">NORMA YASMIN FREGOSO VELASCO <br />REPRESENTANTE LEGAL</p>
      <p class="color3"><?php echo $datos_comercial[0] ?> <br />REPRESENTANTE LEGAL</p>
    </div>
    <div class="firmas1" style="margin-top: 70px">
      <p class="color3">TESTIGO</p>
      <p class="color3">TESTIGO</p>
    </div>
    <div class="firmas1" style="margin-bottom: 50px">
      <div class="firma"></div>
      <div class="firma"></div>
    </div>
  </div>
</body>

</html>