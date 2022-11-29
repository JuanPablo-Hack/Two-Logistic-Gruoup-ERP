function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Peso Tara:</td><td>" +
    aData[6] +
    "</td><td>Peso Bruto:</td><td>" +
    aData[7] +
    "</td></tr>";
  sOut += "<tr><td>Peso Neto:</td><td>" + aData[8] + "</td></tr>";
  sOut += "</table>";
  return sOut;
}
$(document).ready(function () {
  var nCloneTh = document.createElement("th");
  var nCloneTd = document.createElement("td");
  nCloneTd.innerHTML = '<img src="datatables/details_open.png">';
  nCloneTd.className = "center";

  $("#hidden-table-info thead tr").each(function () {
    this.insertBefore(nCloneTh, this.childNodes[0]);
  });

  $("#hidden-table-info tbody tr").each(function () {
    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
  });

  var oTable = $("#hidden-table-info").dataTable({
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
  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */
  $("#hidden-table-info tbody td img").on("click", function () {
    var nTr = $(this).parents("tr")[0];
    if (oTable.fnIsOpen(nTr)) {
      /* This row is already open - close it */
      this.src = "datatables/details_open.png";
      oTable.fnClose(nTr);
    } else {
      /* Open this row */
      this.src = "datatables/details_close.png";
      oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), "details");
    }
  });
});
