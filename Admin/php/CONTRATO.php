<?php

echo '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <style>
    body {
      background: lightgrey;
      display: flex;
      justify-content: center;
    }

    .page {
      padding: 50px 80px;
      margin: 50px;
      background: white;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
      max-width: 800px;
      min-width: 500px;
    }

    #terms-and-conditions {
      font-size: 14px;
    }

    #terms-and-conditions h1 {
      font-size: 34px;
    }

    #terms-and-conditions ol {
      counter-reset: item;
    }

    #terms-and-conditions li {
      display: block;
      margin: 20px 0;
      position: relative;
      color: black;
    }

    #terms-and-conditions li:before {
      position: absolute;
      top: 0;
      margin-left: -50px;
      color: black;
      content: counters(item, ".") "    ";
      counter-increment: item;
    }
  </style>
  <div class="page">
    <div id="terms-and-conditions">
      <p>
        <strong>
          CONTRATO DE PRESTACIÓN DE SERVICIOS QUE CELEBRAN POR UNA
          PARTE LA EMPRESA TWO LOGISTIC SOLUCIONES INTERNACIONALES S. DE
          R.L. de C.V., REPRESENTADA LEGALMENTE POR LA C. NORMA YASMIN
          FREGOSO VELASCO, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ “EL
          PRESTADOR” Y POR LA OTRA PARTE CLIENTE XXXX REPRESENTADA
          LEGALMENTE POR C XXXX A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ
          “EL CLIENTE”, DE ACUERDO CON LAS DECLARACIONES Y CLÁUSULAS
          SIGUIENTES
        </strong>
      </p>
      <h1>D E C L A R A C I O N E S</h1>

      <ol>

        <li>
          <b>Declara “EL PRESTADOR” por conducto de representante legal y bajo protesta de
            decir verdad</b>
          <ol>
            <li>
              Que es una persona moral constituida conforme a las leyes mexicanas según lo
              acredita con la Escritura Pública No. 19819 de fecha 26 de enero de 2022 otorgada
              ante la Fe del Lic. Marcelino Romero Vargas, Notario Público No. 3 de
              Manzanillo, Colima.
            </li>
            <li>
              Que dentro de su objeto social se permite la celebración del presente contrato.
            </li>
            <li>Que se encuentra inscrita al Registro Federal de Contribuyentes del Servicio de
              Administración Tributaria con la clave TLS2201263L9</li>
            <li>Que su representante legal cuenta con las facultades necesarias para la suscripción
              de este documento, lo que acredita con la escritura señalada, mismas facultades
              que no le han sido modificadas, revocadas, ni limitadas de forma alguna</li>
            <li>Que es su deseo celebrar el presente acuerdo.</li>
            <li>Que cuenta con los recursos humanos, materiales y económicos, necesarios y
              suficientes, para la celebración de este contrato, los cuales son de procedencia
              lícita</li>
            <li>Que señala como domicilio convencional para todos los efectos del presente
              acuerdo el ubicado en Avenida El Dorado, 230-B, Colonia Barrio Nuevo Salagua,
              en Manzanillo, Colima, México, C.P. 28869.
            </li>
            <li>
              Que para la celebración de este contrato fue debidamente asesorada por los
              profesionistas designados para tales efectos.
            </li>
          </ol>
        </li>
        <li>
          <b>Declara “EL CLIENTE”, a través de su representante legal y bajo protesta de decir
            verdad:
          </b>
          <ol>
            <li>
              Ser una sociedad constituida de conformidad con las leyes mexicanas, según
              escritura XXX de fecha XX de diciembre de XX, pasada ante la fe del Lic. XXX,
              notario público titular número XX del entonces denominado XX; y registrada bajo
              inscripción folio XX del registro de comercio del XX con RFC: XXX
            </li>
            <li>Que dentro de su objeto social se permite la celebración del presente contrato
            </li>
            <li>Que se encuentra inscrita al Registro Federal de Contribuyentes del Servicio de
              Administración Tributaria con la clave XXX</li>
            <li>Que su representante cuenta con facultades legales para obligarla, mismas que a
              la fecha no le han sido revocadas o restringidas en forma alguna, de conformidad
              con la Escritura Pública XXX de fecha XX de noviembre del XXXX pasada ante
              la fe del Lic. XXX, notario público titular número XXX del XX.
            </li>
            <li>
              Que es su deseo celebrar el presente acuerdo
            </li>
            <li>Que cuenta con los recursos humanos, materiales y económicos, necesarios y
              suficientes, para la celebración y cumplimiento de este contrato, los cuales son de
              procedencia lícita.</li>
            <li>Que los bienes, mercancías o productos, en adelante “LOS PRODUCTOS” que
              proporcionará a “EL PRESTADOR” para la ejecución de “LOS SERVICIOS”
              son de procedencia lícita y han cumplido con la normativa legal aplicable para su
              obtención, propiedad y posesión legítima.</li>
            <li> Que señala como domicilio convencional para todos los efectos del presente
              acuerdo el ubicado en XXXXX</li>
            <li>Que para la celebración de este contrato fue debidamente asesorada por los
              profesionistas designados para tales efectos.s</li>
          </ol>
        </li>
        <li>
          <b>Declaran “LAS PARTES”, bajo protesta de decir verdad:
          </b>
          <ol>
            <li>
              Que es su deseo celebrar el presente contrato de conformidad con los términos y
              condiciones establecidos en el mismo.
            </li>
            <li>Que ambas se reconocen de manera mutua su capacidad y personalidad para
              celebrar el presente contrato.
            </li>
            <li>Que antes y durante la celebración de este instrumento no ha existido dolo, mala
              fe, error o violencia alguna y por lo mismo el presente contrato se encuentra libre de
              cualquier vicio del consentimiento que pudiera invalidarlo.</li>
          </ol>
        </li>
      </ol>
      <br> <br> <br> <br> <br>
      <h1>C L Á U S U L A S</h1>
      <b>PRIMERA. - EL OBJETO DEL CONTRATO. -</b>
      <p>
        “EL PRESTADOR" prestará a favor de “EL CLIENTE” los servicios, en adelante “LOS
        SERVICIOS” en los términos y condiciones que se señalan en la(s) cotización(es) adjunta(s)
        al presente contrato, la(s) cual(es) forma(n) parte integral del mismo y que en adelante se
        referirán como “LA(S) COTIZACIÓN(ES)”.
      </p>
      <b>SEGUNDA. - DE LA CONTRAPRESTACIÓN. -</b>
      <p>
        “EL CLIENTE” pagará a “EL PRESTADOR” por “LOS SERVICIOS”, las cantidades de
        dinero o tarifas, incluida su vigencia, que se señalan en “LA(S) COTIZACIÓN(ES) mediante
        transferencia electrónica de fondos de la cuenta bancaria propiedad de “EL CLIENTE” y
        abonados a la cuenta bancaria propiedad de “EL PRESTADOR” conforme se lo indique. <br> <br>
        “EL PRESTADOR” se compromete a emitir y entregar a favor de “EL CLIENTE” los
        comprobantes fiscales digitales (CFDI) correspondientes, cumpliendo con todos los
        requisitos que las leyes de la materia exigen, contra la entrega de los pagos correspondientes,
        incluidos anticipos, debiendo especificar el importe recibido y relacionarlo con el presente
        contrato, así como desglosar el impuesto al valor agregado. El CFDI deberá ser enviado al
        correo electrónico que al efecto indique “EL CLIENTE”. <br> <br>
        Toda vez que “LA(S) COTIZACIÓN(ES)” se presenten en dólares americanos, el cliente
        pagara a “EL PRESTADOR” en esa misma moneda de curso legal en los Estados Unidos de
        América. <br> <br>
        La contraprestación pactada a favor de “EL PRESTADOR” es justa y lo compensará por
        todos los gastos directos o indirectos, que se originen como consecuencia de este contrato.
      </p>
      <b>TERCERA. – VIGENCIA DE CONTRATO. -</b>
      <p>
        “LAS PARTES” están conformes y acuerdan que el presente contrato, tendrá una vigencia
        obligatoria conforme al plazo de un año contado a partir de la firma de este contrato y que
        las tarifas de “LOS SERVICIOS” que se señalan en “LA(S) COTIZACIÓN(ES) se
        mantendrán vigentes por el periodo que dure el presente contrato.
      </p>
      <b>CUARTA. - TERMINACIÓN ANTICIPADA.-</b>
      <p>
        “LAS PARTES”, de común acuerdo, podrán dar por terminado anticipadamente el presente
        contrato. <br> <br>
        Una vez terminado el contrato “LAS PARTES” se otorgarán el más amplio finiquito que en
        derecho corresponda no pudiendo reservarse acción y/o derecho que ejercitar una en contra
        de la otra. <br> <br>
        Queda expresamente pactado por las partes, que no tendrán responsabilidad civil por los
        daños y perjuicios que pudieran causarse a consecuencia de caso fortuito o fuerza mayor,
        entendiéndose por esto a todo acontecimiento, presente o futuro, ya sea fenómeno de la
        naturaleza o no, que esté fuera del dominio de la voluntad, que no pueda preverse o que aún
        previéndose no pueda evitarse. <br> <br>
        “LAS PARTES” podrán también, de común acuerdo, suspender los efectos de este contrato,
        sin que ello traiga como consecuencia su terminación; una vez desaparecida la causa de
        suspensión continuarán los efectos del mismo.
      </p>
      <b>QUINTA. - CAUSALES DE RESCISIÓN. -</b>
      <p>
        Serán causas de rescisión del presente contrato las siguientes:
      </p>
      <ol>
        <li>Las causas previstas en las leyes de la materia;</li>
        <li>En caso de concurso, quiebra, liquidación o insolvencia económica de cualquiera de
          “LAS PARTES”.</li>
        <li>Porque alguna de las partes haya dado, declarado, entregado o manifestado a la otra,
          información falsa o inexacta para la celebración de este contrato.</li>
        <li>Por incumplir con cualquiera de las obligaciones a su cargo, que se señalan en el
          presente contrato.</li>
      </ol>
      <p>
        La parte que haya dado motivo a la rescisión deberá pagar a la otra los daños y perjuicios que
        se ocasionen con motivo de la rescisión. <br> <br>
        El procedimiento para rescindir será el siguiente:
      </p>
      <ol>
        <li>Quien haya sufrido la causal de recisión notificará a su contraparte que el contrato
          queda rescindido y en su caso el monto de los daños y perjuicios que estima
          ocasionados, quedando expedito su derecho para hacer el reclamo que corresponda.</li>
        <li>En caso de que haya sido “EL CLIENTE” quien dio motivo a la causal de rescisión,
          “EL PRESTADOR” podrá retener en garantía los bienes o materiales propiedad de
          “EL CLIENTE” que en su caso tenga en su posesión, hasta por un monto equivalente
          de 2 a 1 de los posibles daños y perjuicios ocasionados. </li>
        <li>A partir de la fecha en que se notifique a la parte que dio motivo a la rescisión, se
          deberán detener los trabajos que estuviesen pendiente de iniciarse y únicamente se
          deberán concluir aquellos que estuvieran ya en ejecución y que hubieran sido
          cubiertos por “EL CLIENTE” a satisfacción de “EL PRESTADOR”.</li>
        <li>Si “EL PRESTADOR” fue quien dio motivo a la rescisión, deberá concluir los
          trabajos que estuvieran ya en ejecución, sin que eso le dé derecho a pago de
          contraprestación alguna.</li>
      </ol>
      <p>Queda expresamente pactado por “LAS PARTES”, que no tendrán responsabilidad civil por
        los daños y perjuicios que pudieran causarse a consecuencia de caso fortuito o fuerza mayor,
        entendiéndose por esto a todo acontecimiento, presente o futuro, ya sea fenómeno de la
        naturaleza o no, que esté fuera del dominio de la voluntad, que no pueda preverse o que aún
        previéndose no pueda evitarse, incluida(s) la(s) pandemia(s) declarada(s) oficialmente por
        las autoridades sanitarias. Podrán suspenderse los efectos de este contrato, sin que ello traiga
        como consecuencia su terminación; una vez desaparecida la causa de suspensión continuarán
        los efectos del mismo.</p>

      <b>SEXTA. - OBLIGACIONES DE “EL PRESTADOR”.-</b>
      <p>
        “EL PRESTADOR” tendrá las siguientes obligaciones enunciativas, más no limitativas:
      </p>
      <ol>
        <li>Prestar “LOS SERVICIOS” de conformidad con la oferta realizada a “EL CLIENTE”
          a través de “LA(S) COTIZACIÓN(ES)” </li>
        <li>Proteger, cuidar, mantener y utilizar correctamente los bienes, materiales y demás
          elementos que suministre “EL CLIENTE”, utilizándolos única y exclusivamente para
          los alcances del presente contrato.</li>
        <li>Corregir cualquier defecto o vicio oculto relacionado a los servicios que haya
          ejecutado y que “EL CLIENTE” le reclame</li>
        <li>Sacar en paz y a salvo a “EL CLIENTE” de cualquier reclamación que algún tercero
          le pudiera hacer derivado de la ejecución de los servicios a su cargo.
        </li>
        <li>Las demás obligaciones que se establecen a su cargo en este contrato o en las
          disposiciones de ley aplicables.
        </li>
      </ol>
      <b>SÉPTIMA. - OBLIGACIONES DE “EL CLIENTE”.-</b>
      <p>“EL CLIENTE” se obliga a:</p>
      <ol>
        <li>Proporcionar a “EL CLIENTE” toda la información y detalles este requiera para el
          cumplimiento del objetivo de este contrato.</li>
        <li>Pagar oportunamente a “EL PRESTADOR” el monto de la contraprestación pactada
          a su favor por la ejecución de “LOS SERVICIOS”.</li>
        <li>Las demás obligaciones que se establecen a su cargo en este contrato o en las
          disposiciones de ley aplicables.
        </li>
      </ol>
      <b>OCTAVA. - CONFIDENCIALIDAD Y RESERVA DE INFORMACIÓN. -</b>
      <p>
        “LAS PARTES” se obligan a guardar la debida confidencialidad de los documentos,
        estrategias comerciales, información, datos, revelaciones existentes con motivo del presente
        contrato, planos y en general respecto a cualquier información que adquieran de la otra parte,
        incluyendo, sin limitar, en relación a los procesos, modelos, métodos, técnicas, sistemas,
        patentes y marcas que se empleen para la realización de los servicios. <br><br>
        Ninguna información arriba mencionada podrá divulgarse a terceros, reproducirse,
        publicarse, revelarse o permitirse el acceso sin el previo consentimiento escrito de la otra
        parte. <br><br>
        “LAS PARTES” en todo momento serán responsables por los daños y perjuicios que se
        causen a la parte a quien pertenece la información de que se trate, por el manejo, empleo o
        divulgación no autorizada de dicha información. <br><br>
        Toda la información que resulte de la ejecución de este contrato, así como la que se
        compartan “LAS PARTES” incluyendo información técnica o comercial, será considerada
        como secreto industrial, y por ende reservada, por lo que no podrá ser usada para cualquier
        otro propósito distinto que no sea para el cumplimiento de las obligaciones en este contrato.
      </p>
      <b>NOVENA.- RELACIONES LABORALES.-</b>
      <p>Cada parte será considerada como única responsable del personal que ocupe o utilice con
        motivo de la prestación de los servicios materia de este contrato y por ende será la única
        responsable de las obligaciones derivadas de las disposiciones legales y demás
        ordenamientos en materia de trabajo y de seguridad social. <br><br>
        En caso de algún trabajador de “LAS PARTES” llegare entablar demanda laboral o acción
        legal de cualquier índole en contra de la otra parte, estas se sujetarán a lo que a continuación
        se señala:</p>
      <ol>
        <li>La parte a quien recae la relación laboral con el trabajador de que se trate asumirá la
          carga y costo del procedimiento por el trabajador liberando a la otra parte de cualquier
          responsabilidad.
        </li>
        <li>En caso de emplazamiento a huelga o de cualquier otro conflicto colectivo del
          trabajo, la parte a quien corresponda asumirá la relación laboral con los trabajadores
          de que se trate, asumiendo la carga y costo del conflicto, liberando a la otra parte de
          cualquier responsabilidad</li>
        <li>En caso de emplazamiento a huelga o de cualquier otro conflicto colectivo del
          trabajo, la parte a quien corresponda asumirá la relación laboral con los trabajadores
          de que se trate, asumiendo la carga y costo del conflicto, liberando a la otra parte de
          cualquier responsabilidad.</li>
        <li>Los trabajadores, empleados, directivos y funcionarios de “LAS PARTES” quedaran
          sujetos a las prohibiciones y a las responsabilidades antes señaladas y por ese solo
          hecho obligan a la parte infractora a pagar a la parte afectada los daños y perjuicios
          causados, en caso de que estos incurran en alguna violación.
        </li>
      </ol>
      <p>El presente contrato no será considerado bajo ninguna circunstancia como de asociación o
        sociedad entre “LAS PARTES” ni los considera socios o accionistas uno del otro; por lo que
        cada parte es ajena a los vínculos o relaciones que cada una de ellas establezca con terceros;
        así como con sus respectivos empleados, funcionarios, socios y/o el nombre con el que se les
        designe. Asimismo “EL PRESTADOR” libera a “EL CLIENTE” de cualquier reclamación
        laboral del personal de “EL PRESTADOR” a “EL CLIENTE”.</p>
      <b>DÉCIMA. - MISCELÁNEOS.-</b>
      <ol>
        <li>Cada parte será responsable de los impuestos que les corresponda pagar de
          conformidad con las leyes fiscales vigentes</li>
        <li>Por el hecho de haber celebrado el presente contrato “LAS PARTES” aceptan todos
          los términos establecidos en el mismo, incluyendo:
          <ol>
            <li>Que todas las declaraciones e información proporcionadas por “LAS
              PARTES” son ciertas bajo protesta de decir verdad, exactas y completas.</li>
            <li>Que autorizan a investigar y verificar los datos e información proporcionados
              durante el presente contrato.
            </li>
            <li>Que cualquier dato e información de “LAS PARTES” que pueda ser revelado
              a las autoridades que así lo soliciten en caso de alguna investigación, esto
              siempre y cuando dicha información sea solicitada en forma legal.</li>
          </ol>
        </li>
        <li>“EL PRESTADOR” se obliga a informar a “EL CLIENTE”, cuantas veces le sea
          requerido, del estado que guarda el desarrollo de las actividades contratadas, así como
          a rendir un informe general en cualquier tiempo. </li>
        <li>Nada de lo estipulado en el presente contrato, ni durante las discusiones, ni las
          revelaciones hechas en términos del presente, serán consideradas como un
          compromiso u obligación de “LAS PARTES” para comprometerse en alguna relación
          de negocios, contrato o negociaciones futuras con su contraria, o que limiten el
          derecho de las partes a sostener discusiones o llevar a cabo actividades similares a
          aquellas relacionadas con el presente con partes distintas.</li>
        <li>“LAS PARTES” establecen que el presente contrato no constituye ni implica una
          asociación, alianza, representación legal, sociedad o cualquier otra forma de
          organización al amparo de las leyes mexicanas. </li>
        <li>“LAS PARTES” no están autorizadas a asumir convenios o firmar documentos de
          ningún tipo en nombre de la otra; así como tampoco se delegan facultad de gestión o
          representación.
        </li>
        <li>El presente contrato, así como cualquier documento que deba ser otorgado o
          entregado de acuerdo con lo que aquí se establece, contiene el acuerdo total entre
          “LAS PARTES” con respecto a las materias aquí incluidas y extingue todos los
          acuerdos, negociaciones, convenios, escritos anteriores entre ellas con relación a la
          materia del presente, por lo que si alguna parte en específico de este contrato se
          declarara ilegal o nula, solo invalidará dicha parte en específico pero no afectará la
          validez de lo demás que no fue declarado nulo o ilegal.</li>
        <li>“EL CLIENTE” manifiesta bajo protesta de decir verdad que “LOS PRODUCTOS”
          los tiene en legítima posesión, y que están sujetos a “LOS SERVICIOS” que se
          describen en “LA(S) COTIZACIÓN(ES)”, son de procedencia lícita y se obtuvieron
          cumpliendo con la normativa legal aplicable al caso concreto, por lo que releva a “EL
          PRESTADOR” de cualesquiera obligaciones de verificar su origen o procedencia, así
          como la legitimidad de su propiedad o posesión.</li>
        <li>“EL CLIENTE” deberá notificar por escrito a “EL PRESTADOR”, las
          especificaciones y precauciones especiales requeridas por los “LOS PRODUCTOS”. </li>
        <li>“EL PRESTADOR” no será responsable de ninguna pérdida, daño o perjuicio de
          “LOS PRODUCTOS” en caso de que “EL CLIENTE” no notifique a “EL
          PRESTADOR” respecto de los cuidados especiales y precauciones que deban tenerse
          con “LOS PRODUCTOS” al momento de realizarse “LOS SERVICIOS”.</li>
        <li>En caso de que “EL CLIENTE” desee que “EL PRESTADOR” proporcione servicios
          distintos con respecto a otros productos y mercancías distintos de “LOS
          PRODUCTOS” que se refiere(n) “LA(S) COTIZACIÓN(ES)” deberá notificárselo
          por escrito a “EL PRESTADOR” indicándole las características y cuidados especiales
          para esos productos y mercancías, de tal forma que “EL PRESTADOR” pueda
          analizar la posibilidad de llevar a cabo nuevos servicios con relación a los nuevos
          productos. “EL PRESTADOR” no quedará obligado a prestar los nuevos servicios
          con relación a nuevos productos. “EL PRESTADOR” deberá presentar una nueva
          cotización por dichos nuevos servicios.
        </li>
        <li>“EL CLIENTE” será responsable de los daños y perjuicios sufridos por “EL
          PRESTADOR” que se deriven de la negligencia, dolo, engaño o mala fe de “EL
          CLIENTE”, debido a la información errónea, incompleta, inexacta o falsa
          proporcionada a “EL PRESTADOR” con relación a “LOS PRODUCTOS”.</li>
        <li>Para efectos de cualquier notificación relacionada con el presente contrato, incluido
          el procedimiento de rescisión, “LAS PARTES” señalan como sus domicilios
          convencionales para oír y recibir toda clase de notificaciones los domicilios
          mencionados en las declaraciones de cada una de “LAS PARTES” así como los
          siguientes correos electrónicos:
          <ol>
            <li>Por “EL PRESTADOR”: <br>
              <a href="mailto:comercial@twologistic.com">comercial@twologistic.com</a>
            </li>
            <li>Por “EL CLIENTE”:
              <br>
              <a href="mailto:"></a>
            </li>
          </ol>
        </li>
        <li>Acepta “EL CLIENTE” que, para el caso que “LOS PRODUCTOS” estando en
          posesión de “EL PRESTADOR” por virtud de la vigencia de este contrato y se viesen
          involucrados en algún procedimiento de investigación de cualquier índole, juicio
          penal o juicio autónomo de extinción de dominio, por causas imputables a “EL
          CLIENTE”, desde ese momento lo exonera y expresamente manifiesta que “EL
          PRESTADOR” no tiene ninguna responsabilidad legal derivada de “LOS
          SERVICIOS” que ejecuta al amparo de este contrato y con relación a “LOS
          PRODUCTOS”.
        </li>
      </ol>
      <b>DÉCIMA PRIMERA. - JURISDICCIÓN. -</b>
      <p>
        Para la interpretación y cumplimiento de este CONTRATO y para todo aquello que no esté
        expresamente estipulado en el mismo, las partes se someten expresamente a la legislación de
        la Ciudad de Manzanillo, Colima, así como a la jurisdicción de los tribunales de fuero común
        de dicha ciudad, por lo tanto "EL CLIENTE" y “EL PRESTADOR” renuncian expresamente
        al fuero que por razón de sus domicilios presentes o futuros pudieran corresponderles.
      </p>
      <b>DÉCIMA SEGUNDA. - BUENA FE ENTRE LAS PARTES.</b>
      <p>
        “LAS PARTES” que firman este contrato acuerdan que es su voluntad llevar a buen término,
        este acuerdo. Sin presión alguna y para la consecución del objeto de este Contrato no hay
        dolo, ni mala fe o cualquier motivo de interpretación mal encaminado, además convienen en
        que cualquier escrito adicionado a mano tendrá la misma validez si las partes firmantes así
        lo deciden siempre que no haya tachaduras o enmendaduras al texto original.
        Leído que fue por ambas partes este contrato y una vez enterados de su contenido y alcance,
        lo firman en contrapartes, por duplicado, uno para cada parte, de común acuerdo, en la ciudad
        de Manzanillo, Colima, México a los 15 días del mes de marzo de 2022.
      </p>
    </div>
  </div>

</body>

</html>';
