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
  sOut += "</table>";

  return sOut;
}
$(document).ready(function () {
  var nCloneTh = document.createElement("th");
  var nCloneTd = document.createElement("td");
  nCloneTd.innerHTML = '<img src="datatables/details_open.png">';
  nCloneTd.className = "center";

  $("#hidden-table-info-2 thead tr").each(function () {
    this.insertBefore(nCloneTh, this.childNodes[0]);
  });

  $("#hidden-table-info-2 tbody tr").each(function () {
    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
  });

  var oTable = $("#hidden-table-info-2").dataTable({
    aoColumnDefs: [
      {
        bSortable: false,
        aTargets: [0],
      },
    ],
    dom: "Bfrtip",
    buttons: ["excel", "print"],
    aaSorting: [[1, "desc"]],
  });
  $("#hidden-table-info-2 tbody td img").on("click", function () {
    var nTr = $(this).parents("tr")[0];
    if (oTable.fnIsOpen(nTr)) {
      this.src = "datatables/details_open.png";
      oTable.fnClose(nTr);
    } else {
      this.src = "datatables/details_close.png";
      oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), "details");
    }
  });
});
