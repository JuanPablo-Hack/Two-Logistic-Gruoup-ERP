document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaTipoEmbalaje")
    .addEventListener("submit", AltaTipoEmbalaje);
});
async function AltaTipoEmbalaje(e) {
  e.preventDefault();
  var form = document.getElementById("AltaTipoEmbalaje");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/tipoembalaje_controller.php", {
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
function eliminarTipoEmbalaje(id) {
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
        fetch("php/tipoembalaje_controller.php", {
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
