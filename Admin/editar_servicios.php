<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/selects.php';
    $row = mysqli_fetch_array(servicio($_GET['id']));
    $clientes = clientes();
    $cotizaciones = cotizacion();
    $contratos = contratos();
    $operadores = operadores();
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Comercial/</span> Editar Servicio</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Editar Servicio</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="EditarCliente">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                                                    <select class="form-control" name='cliente'>
                                                        <option value="<?php echo $row['id_cliente']; ?>">Sin Asignar</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($clientes)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cotización</label>
                                                    <select class="form-control" name='cotizacion'>
                                                        <option value="<?php echo $row['id_cotizacion']; ?>">Sin Asignar</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($cotizaciones)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo 'TSL-COT-' . $Row1['id']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Contrato</label>
                                                    <select class="form-control" name='contrato'>
                                                        <option value="<?php echo $row['id_contrato']; ?>">Sin Asignar</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($contratos)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo 'TSL-CON-' . $Row1['id']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Operador</label>
                                                    <select class="form-control" name='operador'>
                                                        <option value="<?php echo $row['id_operador']; ?>">Sin Asignar</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($operadores)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="exampleFormControlSelect1" class="form-label">Fecha de Servicio</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="date" id="html5-date-input" name="fecha_servicio" value="<?php echo $row['fecha_servicio']; ?>" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php echo $row['descripcion']; ?></textarea>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Editar Usuario</button>
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
                .getElementById("EditarCliente")
                .addEventListener("submit", EditarCliente);
        });
        async function EditarCliente(e) {
            e.preventDefault();
            var form = document.getElementById("EditarCliente");
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
                    confirmButtonText: "Si, editar servicio",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "editar");
                        fetch("php/servicios_controller.php", {
                                method: "POST",
                                body: data,
                            })
                            .then((result) => result.text())
                            .then((result) => {
                                if (result == 1) {
                                    swalWithBootstrapButtons.fire(
                                        "Actualizado!",
                                        "El servicio ha sido actualizado en la base de datos.",
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

</body>

</html>