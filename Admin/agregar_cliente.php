<?php
include 'php/conexion.php';
$sql = "SELECT * FROM catalogo_servicios";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    ?>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Comercial/</span> Agregar Clientes</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de cliente</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AltaCliente">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Razón Social</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="razon_social" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">RFC</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                        <input type="text" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="rfc" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Nombre del contacto comercial</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                        <input type="text" id="basic-icon-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email" required />
                                                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                                    </div>
                                                    <div class="form-text">Tienes que poner un correo electrónico válido.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="tel" />
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Nombre del contacto operativo</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                        <input type="text" id="basic-icon-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email" required />
                                                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                                    </div>
                                                    <div class="form-text">Tienes que poner un correo electrónico válido.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="tel" />
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Nombre del contacto administrativo</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto" required />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                        <input type="text" id="basic-icon-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email" required />
                                                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                                    </div>
                                                    <div class="form-text">Tienes que poner un correo electrónico válido.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="tel" />
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">Domicilio</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                        <input type="text" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="domicilio" required />
                                                    </div>
                                                </div>

                                                <div class="row gy-3">
                                                    <div class="col-md">
                                                        <label for="exampleFormControlSelect1" class="form-label">Tipo de servicios</label>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <div class="form-check mt-3">
                                                                <input class="form-check-input" type="checkbox" value="<?php echo $Row1['id']; ?>" id="defaultCheck1" name="check_lista[]" />
                                                                <label class="form-check-label" for="defaultCheck1"> <?php echo $Row1['nombre']; ?> </label>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlSelect1" class="form-label">Estado empresarial</label>
                                                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="estado" required>
                                                            <option selected>Selecciona un estado</option>
                                                            <option value="1">Persona Física</option>
                                                            <option value="2">Persona Moral</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-icon-default-company">Nombre del representante</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                            <input type="text" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="nombre_representante" required />
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Agregar Cliente</button>
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
                    confirmButtonText: "Si, agregar cliente",
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
                                        "El cliente ha sido agregado en la base de datos.",
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