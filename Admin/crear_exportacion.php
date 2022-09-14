<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM tipo_mercancia";
    $result2 = mysqli_query($conexion, $sql2);
    $sql3 = "SELECT * FROM tipo_carga";
    $result3 = mysqli_query($conexion, $sql3);
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Operativa/</span> Agregar Exportaciones</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de Exportación</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AltaExportaciones" enctype="multipart/form-data">

                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='cliente'>
                                                        <option value="0">Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de mercancia</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="mercancia" required onchange="cambiar_conceptos()">
                                                        <option selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($result2)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Carga</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="carga" required onchange="cambiar_conceptos()">
                                                        <option selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($result3)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Factura</label>
                                                    <input class="form-control" type="file" id="formFile" name="factura">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Lista de Embarque</label>
                                                    <input class="form-control" type="file" id="formFile" name="lista_embarque">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">BL</label>
                                                    <input class="form-control" type="file" id="formFile" name="bl">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Ficha Técnica</label>
                                                    <input class="form-control" type="file" id="formFile" name="ficha_tec">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Póliza de Seguro</label>
                                                    <input class="form-control" type="file" id="formFile" name="poliza_seguro">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Póliza de Transporte</label>
                                                    <input class="form-control" type="file" id="formFile" name="poliza_transporte">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Hoja de Seguridad</label>
                                                    <input class="form-control" type="file" id="formFile" name="hoja_seguridad">
                                                </div>
                                                <div>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
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
                .getElementById("AltaExportaciones")
                .addEventListener("submit", AltaExportaciones);
        });
        async function AltaExportaciones(e) {
            e.preventDefault();
            var form = document.getElementById("AltaExportaciones");
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
                    confirmButtonText: "Si, agregar exportación",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "agregar");
                        fetch("php/exportaciones_controller.php", {
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

</body>

</html>