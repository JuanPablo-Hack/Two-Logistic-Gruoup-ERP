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

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <img src="../assets/img/logo.png" alt="twologisticlogo" width="200px" height="175px">
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-desktop"></i>
              <div data-i18n="Analytics">Panel de control</div>
            </a>
          </li>


          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Area Comercial</span>
          </li>
          <li class="menu-item ">
            <a href="listar_proveedores.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-store-alt"></i>
              <div data-i18n="Analytics">Proveedores</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="listar_clientes.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-face"></i>
              <div data-i18n="Analytics">Clientes</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="listar_cotizaciones.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar"></i>
              <div data-i18n="Analytics">Cotizaciones</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="listar_contratos.php" class="menu-link">
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
              <div data-i18n="Analytics">Viajes</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="listar_importacion.php" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-package"></i>
              <div data-i18n="Analytics">Despacho Aduanal</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="bodega_externa.php" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-store"></i>
              <div data-i18n="Analytics">Bodega Externa</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-paste"></i>
              <div data-i18n="Extended UI">Inventario</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="entrada_producto.php" class="menu-link">
                  <div data-i18n="Text Divider">Entrada de Productos</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="salida_producto.php" class="menu-link">
                  <div data-i18n="Text Divider">Salida de Productos</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="bitacora_productos.php" class="menu-link">
                  <div data-i18n="Text Divider">Bitacora de Productos</div>
                </a>
              </li>
            </ul>
          </li>



          <!-- Forms & Tables -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Variables de Entorno</span></li>
          <!-- Forms -->
          <li class="menu-item ">
            <a href="usuarios.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-group"></i>
              <div data-i18n="Analytics">Usuarios</div>
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
          <li class="menu-item ">
            <a href="agentes_aduanales.php" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-truck"></i>
              <div data-i18n="Analytics">Transportistas</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="agentes_aduanales.php" class="menu-link">
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
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <?php include 'templates/profile.php'; ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Bienvenido Administrador! 🎉</h5>
                        <p class="mb-4">
                          No se te olvide de checar los pendientes de la semana. Esperamos que puedas contar con toda la actitud para comenzar bien la semana.
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Servicios</span>
                        <h3 class="card-title mb-2">0</h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                          </div>
                        </div>
                        <span>Viajes Marítimos</span>
                        <h3 class="card-title text-nowrap mb-1">0</h3>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-8">
                      <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                      <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              2022
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                              <a class="dropdown-item" href="javascript:void(0);">2021</a>
                              <a class="dropdown-item" href="javascript:void(0);">2020</a>
                              <a class="dropdown-item" href="javascript:void(0);">2019</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="growthChart"></div>
                      <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                      <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2022</small>
                            <h6 class="mb-0">$32.5k</h6>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2021</small>
                            <h6 class="mb-0">$41.2k</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                          </div>
                        </div>
                        <span class="d-block mb-1">Viajes Terrestres</span>
                        <h3 class="card-title text-nowrap mb-2">0</h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Viajes Áereos</span>
                        <h3 class="card-title mb-2">0</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include 'templates/footer.php'; ?>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
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
</body>

</html>