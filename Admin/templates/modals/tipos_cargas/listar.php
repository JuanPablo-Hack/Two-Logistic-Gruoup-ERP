<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Tipo de Cargas</h4>
<?php include 'templates/modals/tipos_cargas/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Cargas
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de carga </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tipo_carga";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <div class="demo-inline-spacing">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarTiposCarga<?php echo $mostrar['id'] ?>">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="eliminarTiposCarga(<?php echo $mostrar['id'] ?>)">
                                            <span class="tf-icons bx bx-x-circle"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php include 'templates/modals/tipos_cargas/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>