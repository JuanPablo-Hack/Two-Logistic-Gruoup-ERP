<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/consultas.php';
    $row =  mysqli_fetch_array(get_trabajador(1));
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del Sistema/</span> Agregar Usuarios</h4>

                            <!-- Basic Layout -->
                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-12">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Alta de usuario</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="AgregarUsuario">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Nombre Completo</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nombre" value="<?php echo $row['nombre']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">Cargo</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                        <input type="text" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="cargo" value="<?php echo $row['cargo']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                        <input type="text" id="basic-icon-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email" value="<?php echo $row['correo']; ?>" />
                                                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                                    </div>
                                                    <div class="form-text">Tienes que poner un correo electrónico válido.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="tel" value="<?php echo $row['tel']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-password-toggle">
                                                    <label class="form-label" for="basic-default-password12">Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" id="basic-default-password12" placeholder="<?php echo $row['pwd']; ?>" aria-describedby="basic-default-password2" name="contra" value="<?php echo $row['pwd']; ?>" />
                                                        <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Rol de usuario</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="rol" required>
                                                        <option value="<?php echo $Row['rol'] ?>"><?php echo $clasificacion; ?></option>
                                                        <?php
                                                        while ($Row1 = mysqli_fetch_array($result6)) {
                                                        ?>
                                                            <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
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
    <script src="./js/main.js"></script>
    <script src="./js/controller.js"></script>
    <script src="../libs/sweetalert2/sweetalert2.all.min.js"></script>

</body>

</html>