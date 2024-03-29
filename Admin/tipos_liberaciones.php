<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
    <?php
    include 'templates/head.php';
    include 'php/conexion.php';
    include 'php/selects.php';
    if (!isset($_SESSION['id'])) {
        header("location: ../error_login.html");
    }
    $datosOperador = operador($_SESSION['id']);
    ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <img src="../assets/img/logo.png" alt="twologisticlogo" width="200px" height="175px">
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-desktop"></i>
                            <div data-i18n="Analytics">Panel de control</div>
                        </a>
                    </li>


                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Area Comercial</span>
                    </li>
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-store-alt"></i>
                            <div data-i18n="Analytics">Proveedores</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-face"></i>
                            <div data-i18n="Analytics">Clientes</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div data-i18n="Analytics">Cotizaciones</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-notepad"></i>
                            <div data-i18n="Analytics">Contratos</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Area Operativa</span></li>
                    <!-- Cards -->

                    <!-- User interface -->
                    <li class="menu-item ">
                        <a href="listar_servicios.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Analytics">Servicios</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="viajes.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-ship"></i>
                            <div data-i18n="Analytics">Viajes Maritimos / Áereos</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="viajes_terrestres.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-truck"></i>
                            <div data-i18n="Analytics">Viajes Terrestres</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="listar_importacion.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-package"></i>
                            <div data-i18n="Analytics">Despacho Aduanal</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-store"></i>
                            <div data-i18n="Extended UI">Bodega Externa</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="bodega_externa.php" class="menu-link">
                                    <div data-i18n="Text Divider">Almacenaje</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="traspaleo.php" class="menu-link">
                                    <div data-i18n="Text Divider">Traspaleo</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-paste"></i>
                            <div data-i18n="Extended UI">Inventario</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="bitacora_productos.php" class="menu-link">
                                    <div data-i18n="Text Divider">Bitacora de Productos</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Variables de Entorno</span></li>
                    <li class="menu-item ">
                        <a href="usuarios.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Analytics">Usuarios</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="catalogo_servicios.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-money-withdraw"></i>
                            <div data-i18n="Analytics">Catálogo de Servicios</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_servicios.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Analytics">Tipos de Servicios</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipo_contenedores.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-buildings"></i>
                            <div data-i18n="Analytics">Tipo de Contenedores</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_mercancias.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                            <div data-i18n="Analytics">Tipo de Mercancia</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="agentes_aduanales.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-plane"></i>
                            <div data-i18n="Analytics">Agentes Aduanales</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="transportistas.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-truck"></i>
                            <div data-i18n="Analytics">Transportistas</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="tipos_liberaciones.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-ul"></i>
                            <div data-i18n="Analytics">Tipos Liberaciones</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_cargas.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cabinet"></i>
                            <div data-i18n="Analytics">Tipos de Carga</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_plataformas.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-traffic-cone"></i>
                            <div data-i18n="Analytics">Tipos de Plataformas</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_productos.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxl-product-hunt"></i>
                            <div data-i18n="Analytics">Tipos de Productos</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="tipos_embalaje.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-backpack"></i>
                            <div data-i18n="Analytics">Tipos de Embalaje</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <?php include 'templates/profile.php'; ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?php include 'templates/modals/tipo_liberaciones/listar.php' ?>
                    </div>
                </div>
                <?php include 'templates/footer.php'; ?>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="../libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/tipo_liberaciones.js"></script>
</body>

</html>