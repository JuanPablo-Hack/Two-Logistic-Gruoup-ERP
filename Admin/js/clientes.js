function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="3" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Razón Social:</td><td>" +
    aData[1] +
    "</td><td>RFC:</td><td>" +
    aData[2] +
    "</td><td>Domicilio:</td><td>" +
    aData[3] +
    "</td><td>Estado empresarial:</td><td>" +
    aData[4] +
    "</td></tr>";
  sOut +=
    "<tr><td>Representante Legal:</td><td>" +
    aData[5] +
    "</td><td>Contacto Comercial:</td><td>" +
    aData[6] +
    "</td><td>Contacto Operativo:</td><td>" +
    aData[7] +
    "</td></tr>";
  sOut +=
    "<tr><td>Contacto Administrativo:</td><td>" +
    aData[8] +
    "</td><td>Tipos de Servicio:</td><td>" +
    aData[9] +
    "</td></tr>";
  sOut +=
    "<tr><td>Días de Crédito:</td><td>" +
    aData[10] +
    "</td><td>Días de Almacenamiento:</td><td>" +
    aData[11] +
    "</td></tr>";
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
    aaSorting: [[1, "desc"]],
  });

});
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaCliente")
    .addEventListener("submit", AltaCliente);
});
async function AltaCliente(e) {
  e.preventDefault();
  var form = document.getElementById("AltaCliente");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/clientes_controller.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        document.getElementById("success").style.display = "inherit";
        document.getElementById("decline").style.display = "none";
        setTimeout(function () {
          location.reload();
        }, 2000);
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("decline").style.display = "inherit";
      }
    });
}
function eliminarCliente(id) {
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
        fetch("php/clientes_controller.php", {
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
