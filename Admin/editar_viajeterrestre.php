<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/selects.php';
    $row = mysqli_fetch_array(viajes_terrestre($_GET['id']));
    $clientes = clientes();
    $servicios = servicios();
    $agencias_aduanales = agencias_aduanales();
    $tipos_mercancias = tipos_mercancias();
    $tipos_plataformas = tipos_plataformas();
    $transportes = transportes();
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Operativa/</span> Agregar Terrestres</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de Viaje Terrestre</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AltaViajeTerrestre">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='cliente'>
                                                        <option value="<?php echo $row['cliente']; ?>">Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($clientes)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">ID. Del Servicio</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='servicio'>
                                                        <option value="<?php echo $row['servicio']; ?>">Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($servicios)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo 'SERVICIO' . $Row1['id']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Terminal</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="terminal" value="<?php echo $row['terminal']; ?>" />
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Fecha del servicio</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="fecha_servicio" value="<?php echo $row['fecha_servicio']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Hora</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="hora" value="<?php echo $row['hora']; ?>" />
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">No. Contenedor</label>
                                                    <div class="input-group input-group-merge">

                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="no_contenedor" value="<?php echo $row['no_contenedor']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Viaje</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_viaje" required onchange="cambiar_conceptos()">
                                                        <option value="<?php echo $row['tipo_viaje']; ?>" selected>Selecciona un cliente</option>
                                                        <option value="1">Local</option>
                                                        <option value="2">Foraneo</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Agente Aduanal</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="agente_aduanal" required onchange="cambiar_conceptos()">
                                                        <option value="<?php echo $row['id']; ?>" selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($agencias_aduanales)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Mercancia</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_mercancia" required onchange="cambiar_conceptos()">
                                                        <option value="<?php echo $row['tipo_mercancia']; ?>" selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($tipos_mercancias)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Tipo de Plataforma</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_plataforma" required onchange="cambiar_conceptos()">
                                                        <option value="<?php echo $row['tipo_plataforma']; ?>" selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($tipos_plataformas)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Transporte</label>
                                                    <select class="form-select" id="num_conceptos" aria-label="Default select example" name="transporte" required onchange="cambiar_conceptos()">
                                                        <option value="<?php echo $row['transporte']; ?>" selected>Selecciona un cliente</option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($transporte)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php echo $row['descrip']; ?></textarea>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Agregar Viaje</button>
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
                .getElementById("AltaViajeTerrestre")
                .addEventListener("submit", AltaViajeTerrestre);
        });
        async function AltaViajeTerrestre(e) {
            e.preventDefault();
            var form = document.getElementById("AltaViajeTerrestre");
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
                    confirmButtonText: "Si, agregar viaje",
                    cancelButtonText: "No, cancelar!",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        let data = new FormData(form);
                        data.append("accion", "agregar");
                        fetch("php/viajesterrestres_controller.php", {
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