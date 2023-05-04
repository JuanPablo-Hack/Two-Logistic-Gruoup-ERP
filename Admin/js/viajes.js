function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Booking:</td><td>" +
    aData[9] +
    "</td><td>Línea naviera:</td><td>" +
    aData[10] +
    "</td><td>No contenedores:</td><td>" +
    aData[11] +
    "</td></tr>";
  sOut +=
    "<tr><td>Tipo contenedores:</td><td>" +
    aData[12] +
    "</td><td>Buque:</td><td>" +
    aData[13] +
    "</td><td>Viaje:</td><td>" +
    aData[14] +
    "</td></tr>";
  sOut +=
    "<tr><td>Puerto carga:</td><td>" +
    aData[15] +
    "</td><td>Puerto transbordo:</td><td>" +
    aData[16] +
    "</td><td>Puerto destino:</td><td>" +
    aData[17] +
    "</td></tr>";
  sOut +=
    "<tr><td>Puerto transito:</td><td>" +
    aData[18] +
    "</td><td>Tiempo transito:</td><td>" +
    aData[19] +
    "</td><td>Cierre:</td><td>" +
    aData[20] +
    "</td></tr>";
  sOut +=
    "<tr><td>VGM:</td><td>" +
    aData[21] +
    "</td><td>Documentos:</td><td>" +
    aData[22] +
    "</td><td>Tipo liberacion:</td><td>" +
    aData[23] +
    "</td></tr>";
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
function cambiar_conceptos() {
  var x = document.getElementById("num_conceptos").value;
  console.log(x);
  switch (x) {
    case "1":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "none";
      document.getElementById("concepto_3").style.display = "none";
      break;
    case "2":
      document.getElementById("concepto_1").style.display = "none";
      document.getElementById("concepto_2").style.display = "inherit";
      document.getElementById("concepto_3").style.display = "none";
      break;
    case "3":
      document.getElementById("concepto_1").style.display = "none";
      document.getElementById("concepto_2").style.display = "none";
      document.getElementById("concepto_3").style.display = "inherit";
      break;
  }
}
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaviajeMaritimo")
    .addEventListener("submit", AltaviajeMaritimo);
});
async function AltaviajeMaritimo(e) {
  e.preventDefault();
  var form = document.getElementById("AltaviajeMaritimo");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/viajes_controller.php", {
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
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaviajeAereo")
    .addEventListener("submit", AltaviajeAereo);
});
async function AltaviajeAereo(e) {
  e.preventDefault();
  var form = document.getElementById("AltaviajeAereo");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/viajes_controller.php", {
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
async function AltaviajeMaritimo(e) {
  e.preventDefault();
  var form = document.getElementById("AltaviajeMaritimo");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/viajes_controller.php", {
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
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaviajeTerrestre")
    .addEventListener("submit", AltaviajeTerrestre);
});
async function AltaviajeTerrestre(e) {
  e.preventDefault();
  console.log("AltaviajeTerrestre");
  var form = document.getElementById("AltaviajeTerrestre");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/viajes_controller.php", {
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
        fetch("php/viajes_controller.php", {
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
