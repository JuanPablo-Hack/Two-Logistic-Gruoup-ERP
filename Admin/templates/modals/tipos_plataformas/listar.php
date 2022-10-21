<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Tipo de Plataformas</h4>
<?php include 'templates/modals/tipos_plataformas/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Plataformas
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de plataformas </h5>
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
                        $sql = "SELECT * FROM tipo_plataforma";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <div class="demo-inline-spacing">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarTipoPlataformas<?php echo $mostrar['id'] ?>">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="eliminarTiposPlataforma(<?php echo $mostrar['id'] ?>)">
                                            <span class="tf-icons bx bx-x-circle"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php include 'templates/modals/tipos_plataformas/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>