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
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store-alt"></i>
                <div data-i18n="Account Settings">Proveedores</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="crear_proveedores.php" class="menu-link">
                        <div data-i18n="Account">Alta de Proveedores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_proveedores.php" class="menu-link">
                        <div data-i18n="Notifications">Listar Proveedores</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-face"></i>
                <div data-i18n="Authentications">Clientes</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="agregar_cliente.php" class="menu-link">
                        <div data-i18n="Basic">Alta de Cliente</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_clientes.php" class="menu-link">
                        <div data-i18n="Basic">Listar Clientes</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Misc">Cotizaciones</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Alta de Cotizaciones</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Listar Cotizaciones</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Misc">Contratos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Alta de Contratos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Listar Contratos</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Servicios</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="agregar_servicio.php" class="menu-link">
                        <div data-i18n="Error">Alta de Servicios</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_servicios.php" class="menu-link">
                        <div data-i18n="Under Maintenance">Listar Servicios</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Area Operativa</span></li>
        <!-- Cards -->

        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-car"></i>
                <div data-i18n="User interface">Viajes</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Alta de viajes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">Bitacora de viajes</div>
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
                    <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Entrada de Productos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div data-i18n="Text Divider">Salida de Productos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div data-i18n="Text Divider">Bitacora de Inventario</div>
                    </a>
                </li>
            </ul>
        </li>



        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Variables de Entorno</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Form Elements">Trabajadores</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="agregar_usuario.php" class="menu-link">
                        <div data-i18n="Basic Inputs">Alta de Trabajadores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_usuarios.php" class="menu-link">
                        <div data-i18n="Input groups">Lista de Trabajadores</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Tipos de Servicios</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="agregar_tiposervicio.php" class="menu-link">
                        <div data-i18n="Vertical Form">Alta de tipo de servicio</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_tiposervicios.php" class="menu-link">
                        <div data-i18n="Horizontal Form">Tipos de servicios</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Form Layouts">Unidades</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Alta de unidad</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Lista de unidades</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Form Layouts">Tipo de Contenedores</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="agregar_tipocontenedor.php" class="menu-link">
                        <div data-i18n="Vertical Form">Alta de tipo de contenedores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="listar_tipocontenedor.php" class="menu-link">
                        <div data-i18n="Horizontal Form">Lista de tipos de contenedores</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>