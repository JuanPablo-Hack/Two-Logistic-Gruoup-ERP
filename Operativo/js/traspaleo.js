function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Tipo embalaje: </td><td>" +
    aData[7] +
    "</td><td>No. Contenedores:</td><td>" +
    aData[8] +
    "</td></tr>";
  sOut +=
    "<tr><td>Transportista Entrada:</td><td>" +
    aData[9] +
    "</td><td>Datos:</td><td>" +
    aData[10] +
    "</td></tr>";
  sOut +=
    "<tr><td>Transportista Salida:</td><td>" +
    aData[11] +
    "</td><td>Datos:</td><td>" +
    aData[12] +
    "</td></tr>";
  sOut += "<tr><td>Descripción:</td><td>" + aData[13] + "</td></tr>";
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
    aaSorting: [[1, "desc"]],
  });

});

function eliminarTraspaleo(id) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Estas seguro?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData();
        data.append("id", id);
        data.append("accion", "eliminar");
        fetch("php/traspaleo_controller.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Eliminado!",
                "Su archivo ha sido eliminado.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            }
          })
          .catch((error) => {
            console.log(error);
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Tu archivo ha sido salvado",
          "error"
        );
      }
    });
}
