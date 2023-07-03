function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Entrada a Almacen:</td><td>" +
    aData[9] +
    "</td><td>Salida de Almacen:</td><td>" +
    aData[10] +
    "</td></tr>";
  sOut +=
    "<tr><td>Tipo de Producto:</td><td>" +
    aData[7] +
    "</td><td>Tipo de embalaje:</td><td>" +
    aData[8] +
    "</td></tr>";
  sOut += "<tr><td>Documentos:</td><td>" + aData[11] + "</td></tr>";
  sOut += "<tr><td>Descripción:</td><td>" + aData[12] + "</td></tr>";
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
    buttons: ["excel"],
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
  switch (x) {
    case "1":
      document.getElementById("concepto_1").style.display = "inherit";
      document.getElementById("concepto_2").style.display = "none";
      break;
    case "2":
      document.getElementById("concepto_1").style.display = "none";
      document.getElementById("concepto_2").style.display = "inherit";
      break;
  }
}
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaAlmacenaje")
    .addEventListener("submit", AltaAlmacenaje);
});
async function AltaAlmacenaje(e) {
  e.preventDefault();
  var form = document.getElementById("AltaAlmacenaje");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/almacenaje_controller.php", {
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
function eliminarAlmacenaje(id) {
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
        fetch("php/almacenaje_controller.php", {
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
function entrada() {
  var num_conceptos = $("#num_entradas").val();
  $.ajax({
    url: "./templates/modals/bodega_externa/formularios/num_entradas.php",
    method: "POST",
    data: {
      num_conceptos: num_conceptos,
    },
    success: function (respuesta) {
      $("#transporte_entrada").html(respuesta);
    },
  });
}
function salida() {
  var num_conceptos = $("#num_salidas").val();
  $.ajax({
    url: "./templates/modals/bodega_externa/formularios/num_salidas.php",
    method: "POST",
    data: {
      num_conceptos: num_conceptos,
    },
    success: function (respuesta) {
      $("#transporte_salida").html(respuesta);
    },
  });
}

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaTraspaleo")
    .addEventListener("submit", AltaTraspaleo);
});
async function AltaTraspaleo(e) {
  e.preventDefault();
  var form = document.getElementById("AltaTraspaleo");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/traspaleo_controller.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        document.getElementById("success").style.display = "inherit";
        document.getElementById("decline").style.display = "none";
        setTimeout(function () {
          location.replace("traspaleo.php");
        }, 2000);
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("decline").style.display = "inherit";
      }
    });
}
