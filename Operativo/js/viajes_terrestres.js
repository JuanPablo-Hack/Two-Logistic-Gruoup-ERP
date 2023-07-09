function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Terminal:</td><td>" +
    aData[8] +
    "</td><td>Fecha Servicio:</td><td>" +
    aData[9] +
    "</td><td>Hora:</td><td>" +
    aData[10] +
    "</td></tr>";
  sOut +=
    "<tr><td>No. Contenedores:</td><td>" +
    aData[11] +
    "</td><td>Tipo de contenedores:</td><td>" +
    aData[12] +
    "</td><td>Tipo de Viaje:</td><td>" +
    aData[13] +
    "</td></tr>";
  sOut +=
    "<tr><td>Agente Aduanal:</td><td>" +
    aData[14] +
    "</td><td>Tipo Mercancia:</td><td>" +
    aData[15] +
    "</td><td>Tipo Plataforma:</td><td>" +
    aData[16] +
    "</td></tr>";
  sOut += "<tr><td>Transportista:</td><td>" + aData[17] + "</td></tr>";
  sOut += "<tr><td>Comentarios Finales:</td><td>" + aData[18] + "</td></tr>";
  sOut += "</table>";

  return sOut;
}
$(document).ready(function () {


  var oTable = $("#hidden-table-info-2").dataTable({
    aoColumnDefs: [
      {
        bSortable: false,
        aTargets: [0],
      },
    ],
    dom: "Bfrtip",
    buttons: ["excel"],
    aaSorting: [[7, "asc"]],
  });

});
