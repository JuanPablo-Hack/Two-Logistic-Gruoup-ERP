<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Tipo de Producto</h4>
<?php include 'templates/modals/tipos_productos/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Producto
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de productos </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tipo_producto";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <div class="dropdown">
                                        <div class="demo-inline-spacing">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarTipoProducto<?php echo $mostrar['id'] ?>">
                                                <span class="tf-icons bx bx-pencil"></span>
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="eliminartipoproducto(<?php echo $mostrar['id'] ?>)">
                                                <span class="tf-icons bx bx-x-circle"></span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php include 'templates/modals/tipos_productos/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>