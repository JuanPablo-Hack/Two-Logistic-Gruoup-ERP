<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<head>
  <?php
  include 'templates/head.php';
  include 'php/contadores.php';
  include 'php/selects.php';
  if (!isset($_SESSION['id'])) {
    header("location: ../error_login.html");
  }
  $datosOperador = operador($_SESSION['id']);
  ?>
</head>

<body>
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
          <li class="menu-item active">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-desktop"></i>
              <div data-i18n="Analytics">Panel de control</div>
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
                <a href="bitacora_productos.php" class="menu-link">
                  <div data-i18n="Text Divider">Bitacora de Productos</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <div class="layout-page">
        <?php include 'templates/profile.php'; ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Bienvenido <?php echo $datosOperador['nombre'] ?>! 🎉</h5>
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
                            <i class="menu-icon tf-icons bx bx-cube-alt" style="color:#68C0C0;"></i>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Servicios</span>
                        <h3 class="card-title mb-2"><?php echo serviciosTotales(); ?></h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bxs-ship" style="color:#68C0C0;"></i>
                          </div>
                        </div>
                        <span>Viajes Marítimos</span>
                        <h3 class="card-title text-nowrap mb-1"><?php echo viajesTotales(); ?></h3>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bxs-truck" style="color:#68C0C0;"></i>
                          </div>
                        </div>
                        <span class="d-block mb-1">Viajes Terrestres</span>
                        <h3 class="card-title text-nowrap mb-2"><?php echo viajesTerrestresTotales(); ?></h3>

                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bxs-plane" style="color:#68C0C0;"></i>
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