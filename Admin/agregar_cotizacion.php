<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include 'templates/nav.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <?php include 'templates/profile.php'; ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Comercial/</span> Agregar Cotización</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de Cotización</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AltaCliente">
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="mercancia" required>
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Comercial</option>
                                                        <option value="3">Operador</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">No. de conceptos</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="mercancia" required onchange="cambiar_conceptos()">
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3" style="display: none;" id="concepto_1">
                                                    <label for="exampleFormControlSelect1" class="form-label">Concepto no.1</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="mercancia" required>
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3" style="display: none;" id="concepto_2">
                                                    <label for="exampleFormControlSelect1" class="form-label">Concepto no.2</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="mercancia" required>
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3" style="display: none;" id="concepto_3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Concepto no.3</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="mercancia" required>
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3" style="display: none;" id="concepto_4">
                                                    <label for="exampleFormControlSelect1" class="form-label">Concepto no.4</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="mercancia" required>
                                                        <option selected>Selecciona un cliente</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Crear Cotizacion</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Content -->



                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include 'templates/footer.php'; ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document
                .getElementById("AltaCliente")
                .addEventListener("submit", AltaCliente);
        });
        async function AltaCliente(e) {
            e.preventDefault();
            var form = document.getElementById("AltaCliente");
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger",
                },
                buttonsStyling: false,
            });
            swalWithBootstrapButtons
                .fire({
                    title: "Estas seguro que la información es la correcta?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Si, agregar actividad",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "agregar");
                        fetch("php/clientes_controller.php", {
                                method: "POST",
                                body: data,
                            })
                            .then((result) => result.text())
                            .then((result) => {
                                if (result == 1) {
                                    swalWithBootstrapButtons.fire(
                                        "Agregado!",
                                        "El usuario ha sido agregado en la base de datos.",
                                        "success"
                                    );
                                    form.reset();
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                } else {
                                    swalWithBootstrapButtons.fire(
                                        "Error",
                                        "Hemos tenido un error a la base de datos o la conexión.",
                                        "error"
                                    );
                                    // form.reset();
                                    // setTimeout(function() {
                                    //     location.reload();
                                    // }, 2000);
                                }
                            });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            "Cancelado",
                            "Revise su información de nuevo",
                            "error"
                        );
                    }
                });
        }
    </script>
    <script>
        function cambiar_conceptos() {
            var x = document.getElementById("num_conceptos").value;
            console.log(x);
            switch (x) {
                case "1":
                    document.getElementById("concepto_1").style.display = "inherit";
                    document.getElementById("concepto_2").style.display = "none";
                    document.getElementById("concepto_3").style.display = "none";
                    document.getElementById("concepto_4").style.display = "none";
                    break;
                case "2":
                    document.getElementById("concepto_1").style.display = "inherit";
                    document.getElementById("concepto_2").style.display = "inherit";
                    document.getElementById("concepto_3").style.display = "none";
                    document.getElementById("concepto_4").style.display = "none"
                    break;
                case "3":
                    document.getElementById("concepto_1").style.display = "inherit";
                    document.getElementById("concepto_2").style.display = "inherit";
                    document.getElementById("concepto_3").style.display = "inherit";
                    document.getElementById("concepto_4").style.display = "none";
                    break;
                case "4":
                    document.getElementById("concepto_1").style.display = "inherit";
                    document.getElementById("concepto_2").style.display = "inherit";
                    document.getElementById("concepto_3").style.display = "inherit";
                    document.getElementById("concepto_4").style.display = "inherit";
                    break;
                case "0":
                    document.getElementById("concepto_1").style.display = "none";
                    document.getElementById("concepto_2").style.display = "none";
                    document.getElementById("concepto_3").style.display = "none";
                    document.getElementById("concepto_4").style.display = "none";
                    break;

            }
        }
    </script>

</body>

</html>