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
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Area Operativa</span></li>
        <!-- Cards -->

        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-ship"></i>
                <div data-i18n="User interface">Viajes máritimos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="crear_viajemaritimo.php" class="menu-link">
                        <div data-i18n="Accordion">Alta de viajes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_viajesmaritimos.php" class="menu-link">
                        <div data-i18n="Alerts">Bitacora de viajes</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-truck"></i>
                <div data-i18n="User interface">Viajes Terrestres</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="crear_viajeterrestre.php" class="menu-link">
                        <div data-i18n="Accordion">Alta de viajes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_viajesterrestres.php" class="menu-link">
                        <div data-i18n="Alerts">Bitacora de viajes</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-plane-land"></i>
                <div data-i18n="User interface">Viajes áereos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="crear_viajeaereo.php" class="menu-link">
                        <div data-i18n="Accordion">Alta de viajes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_viajesaereos.php" class="menu-link">
                        <div data-i18n="Accordion">Bitacora de viajes</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-package"></i>
                <div data-i18n="User interface">Despacho Aduanal</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="crear_importacion.php" class="menu-link">
                        <div data-i18n="Accordion">Alta de Importación</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_importacion.php" class="menu-link">
                        <div data-i18n="Accordion">Bitacora de Importaciones</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="crear_exportacion.php" class="menu-link">
                        <div data-i18n="Accordion">Alta de Exportación</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_exportacion.php" class="menu-link">
                        <div data-i18n="Accordion">Bitacora de Exportaciones</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-paste"></i>
                <div data-i18n="Extended UI">Inventario</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="alta_almacenaje.php" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Alta de Almacenaje</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="almacenaje.php" class="menu-link">
                        <div data-i18n="Text Divider">Bitacora de Almacenaje</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="alta_traspaleo.php" class="menu-link">
                        <div data-i18n="Text Divider">Alta de Traspaleo</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="traspaleo.php" class="menu-link">
                        <div data-i18n="Text Divider">Bitacora de Traspaleo</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="entrada_producto.php" class="menu-link">
                        <div data-i18n="Text Divider">Entraba de Producto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="salida_producto.php" class="menu-link">
                        <div data-i18n="Text Divider">Salida de Producto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="bitacora_productos.php" class="menu-link">
                        <div data-i18n="Text Divider">Bitacora de Productos</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>