<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM tipo_embalaje";
    $result2 = mysqli_query($conexion, $sql2);
    $sql3 = "SELECT * FROM tipo_producto";
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Operativa/</span>Alta de Almacenaje</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de Almacenaje</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AltaAlmacenaje">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                                                    <select class="form-select" aria-label="Default select example" required name='cliente'>
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
                                                    <label class="form-label" for="basic-icon-default-fullname">Nombre de Producto</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nombre_producto" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Servicio</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_producto'>
                                                        <option value="0">Selecciona un cliente</option>
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
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Mercancia</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_producto'>
                                                        <option value="0">Selecciona un cliente</option>
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
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Unidad</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_producto'>
                                                        <option value="0">Selecciona un cliente</option>
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
                                                    <label class="form-label" for="basic-icon-default-fullname">Peso</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Cubicaje</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cubicaje" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
                                                        <option value="0">Selecciona un cliente</option>
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
                                                    <label class="form-label" for="basic-icon-default-fullname">Fecha de entrada</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="dias_almacen" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Fecha de salida</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="dias_almacen" required />
                                                    </div>
                                                </div>
                                                <div class="row gy-3">
                                                    <div class="col-md">
                                                        <label for="exampleFormControlSelect1" class="form-label">Documentación</label>
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                                            <label class="form-check-label" for="defaultCheck1"> Carta de Instrucciones</label>
                                                        </div>
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                                            <label class="form-check-label" for="defaultCheck1"> Factura</label>
                                                        </div>
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                                            <label class="form-check-label" for="defaultCheck1"> Packing List</label>
                                                        </div>
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                                            <label class="form-check-label" for="defaultCheck1"> Ficha Técnica</label>
                                                        </div>
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                                            <label class="form-check-label" for="defaultCheck1"> Fotografías</label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
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
                .getElementById("AltaAlmacenaje")
                .addEventListener("submit", AltaAlmacenaje);
        });
        async function AltaAlmacenaje(e) {
            e.preventDefault();
            var form = document.getElementById("AltaAlmacenaje");
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
                    confirmButtonText: "Si, agregar almacenaje",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "agregar");
                        fetch("php/almacenaje_controller.php", {
                                method: "POST",
                                body: data,
                            })
                            .then((result) => result.text())
                            .then((result) => {
                                if (result == 1) {
                                    swalWithBootstrapButtons.fire(
                                        "Agregado!",
                                        "El almacenaje ha sido agregado en la base de datos.",
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