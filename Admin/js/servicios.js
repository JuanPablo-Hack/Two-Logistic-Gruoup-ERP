function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="3 " style="padding-left:50px;">';
  sOut +=
    "<tr><td>Folio:</td><td>" +
    aData[1] +
    "</td><td>Cliente:</td><td>" +
    aData[2] +
    "</td><td>Operador:</td><td>" +
    aData[3] +
    "</td></tr>";
  sOut +=
    "<tr><td>Fecha de Servicio:</td><td>" +
    aData[4] +
    "</td><td>Estado:</td><td>" +
    aData[5] +
    "</td><td>Tipos de Servicio:</td><td>" +
    aData[6] +
    "</td></tr>";
  sOut += "<tr><td>Descripción:</td><td>" + aData[7] + "</td></tr>";
  sOut += "</table>";

  return sOut;
}
$(document).ready(function () {
  var oTable = $("#hidden-table-info").dataTable({
    aoColumnDefs: [
      {
        bSortable: false,
        aTargets: [0],
      },
    ],
    dom: "Bfrtip",
    buttons: ["excel"],
    aaSorting: [[0, "asc"]],
  });
  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */
});
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaServicio")
    .addEventListener("submit", AltaServicio);
});
async function AltaServicio(e) {
  e.preventDefault();
  var form = document.getElementById("AltaServicio");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/servicios_controller.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      document.getElementById("success").style.display = "inherit";
      document.getElementById("decline").style.display = "none";
      setTimeout(function () {
        location.reload();
      }, 2000);
    });
}
function CambiarEstado(IDCotizacion, EstadoCotizacion) {
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
      confirmButtonText: "Si, cambiar de estado",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData();
        data.append("IDCotizacion", IDCotizacion);
        data.append("EstadoCotizacion", EstadoCotizacion);
        data.append("accion", "CambiarEstado");
        fetch("php/servicios_controller.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Cambio de Estado!",
                "El registro ha sido cambiado de estado",
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

function verificarSelectCliente() {
  const x = document.getElementById("selectClient").value;
  x != 0
    ? (document.getElementById("defaultFormControlHelp").style =
        "display: none;")
    : (document.getElementById("defaultFormControlHelp").style =
        "display: inherit;");
}

function verificarSelectEjecutivo() {
  const x = document.getElementById("selectEjecutivo").value;
  x != 0
    ? (document.getElementById("avisoEjecutivo").style = "display: none;")
    : (document.getElementById("avisoEjecutivo").style = "display: inherit;");
}
