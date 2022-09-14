<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/conexion.php'
    ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Area Comercial /</span> Lista de viajes terrestres</h4>
                        <!-- Bordered Table -->
                        <div class="card">
                            <h5 class="card-header">Lista de viajes terrestres </h5>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered" id="table">
                                        <thead>
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Servicio</th>
                                                <th>Terminal</th>
                                                <th>Fecha de Servicio</th>
                                                <th>Hora</th>
                                                <th>No. Contenedor</th>
                                                <th>Descripción</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM viajes_terrestres";
                                            $resultado = $conexion->query($sql);
                                            while ($mostrar = mysqli_fetch_array($resultado)) {
                                            ?>
                                                <tr>

                                                    <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['cliente'] ?>"><?php
                                                                                                                                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                                                                                                                                        $result1 = mysqli_query($conexion, $sql1);
                                                                                                                                        $Row = mysqli_fetch_array($result1);
                                                                                                                                        echo $Row['razon_social'];
                                                                                                                                        ?></a></td>
                                                    <td><?php echo 'TLS-SERVICIO' . $mostrar['servicio'] ?></td>
                                                    <td><?php echo $mostrar['terminal'] ?></td>
                                                    <td><?php echo $mostrar['fecha_servicio'] ?></td>
                                                    <td><?php echo $mostrar['hora'] ?></td>
                                                    <td><?php echo $mostrar['no_contenedor'] ?></td>
                                                    <td><?php echo $mostrar['descrip'] ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="eliminarUsuario(<?php echo $mostrar['id'] ?>)"><i class="bx bx-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/ Bordered Table -->
                        <hr class="my-5" />
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
    <script src="js/controller.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>

</html>