function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Aduana:</td><td>" +
    aData[7] +
    "</td><td>Terminal:</td><td>" +
    aData[8] +
    "</td></tr>";
  sOut +=
    "<tr><td>Mercancia:</td><td>" +
    aData[10] +
    "</td><td>Carga:</td><td>" +
    aData[11] +
    "</td></tr>";
  sOut +=
    "<tr><td>Documentos:</td><td>" +
    aData[12] +
    "</td><td>Creado:</td><td>" +
    aData[9] +
    "</td></tr>";
  sOut += "<tr><td>Comentarios:</td><td>" + aData[13];
  ("</td></tr>");
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
    .getElementById("AltaDespacho")
    .addEventListener("submit", AltaDespacho);
});
async function AltaDespacho(e) {
  e.preventDefault();
  var form = document.getElementById("AltaDespacho");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/despacho_controller.php", {
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
        fetch("php/despacho_controller.php", {
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

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("btn-imprimir")
    .addEventListener("click", imprimirHtmlPdf);
});

const imprimirHtmlPdf = () => {
  var form = document.getElementById("AltaDespacho");
  let data = new FormData(form);
  fetch("php/despacho_imprimir.php", {
    method: "POST",
    body: data,
  })
    .then((r) => r.text())
    .then((r) => {
      html2pdf()
        .set({
          margin: 1,
          filename: "Despacho_Aduanal.pdf",
          image: {
            type: "jpeg",
            quality: 0.98,
          },
          html2canvas: {
            scale: 3, // A mayor escala, mejores gráficos, pero más peso
            letterRendering: true,
          },
          jsPDF: {
            unit: "in",
            format: "a3",
            orientation: "portrait", // landscape o portrait
          },
        })
        .from(r)
        .save()
        .catch((err) => console.log(err));
    });
};
function verificarSelectCliente() {
  const x = document.getElementById("selectClient").value;
  console.log(x);
  x != 0
    ? (document.getElementById("defaultFormControlHelp").style =
      "display: none;")
    : (document.getElementById("defaultFormControlHelp").style =
      "display: inherit;");
}
function verificarSelectProovedor() {
  const x = document.getElementById("selectProovedor").value;
  x != 0
    ? (document.getElementById("proveedorAviso").style = "display: none;")
    : (document.getElementById("proveedorAviso").style = "display: inherit;");
}
