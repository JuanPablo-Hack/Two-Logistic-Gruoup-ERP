function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut += "<tr><td>Conceptos:</td><td>" + aData[5] + "</td></tr>";
  sOut += "<tr><td>Cantidades:</td><td>" + aData[6] + "</td></tr>";
  sOut += "<tr><td>Precios:</td><td>" + aData[7] + "</td></tr>";
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
    aaSorting: [[1, "desc"]],
  });
  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */

});
function cambiar_conceptos() {
  var num_conceptos = $("#num_conceptos").val();
  $.ajax({
    url: "./templates/modals/cotizaciones/conceptos.php",
    method: "POST",
    data: {
      num_conceptos: num_conceptos,
    },
    success: function (respuesta) {
      $("#conceptos").html(respuesta);
    },
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
        fetch("php/cotizacion_controlle.php", {
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
    .getElementById("AltaCotizacion")
    .addEventListener("submit", AltaCotizacion);
});
async function AltaCotizacion(e) {
  e.preventDefault();
  var form = document.getElementById("AltaCotizacion");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/cotizacion_controlle.php", {
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
        form.reset();
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("decline").style.display = "inherit";
      }
    });
}
function addScript(url) {
  var script = document.createElement("script");
  script.type = "application/javascript";
  script.src = url;
  document.head.appendChild(script);
}
addScript(
  "https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"
);

function crearPDF(id) {
  var opt = {
    margin: 1,
    filename: "Cotizacion.pdf",
    image: {
      type: "jpeg",
      quality: 0.98,
    },
    html2canvas: {
      scale: 1,
    },
    jsPDF: {
      unit: "in",
      format: "b2",
      orientation: "p",
    },
  };

  $.ajax({
    type: "POST",
    data: "id=" + id,
    url: "php/cotizacionesPDF.php",
    success: function (r) {
      var worker = html2pdf().set(opt).from(r).toPdf().save();
    },
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
