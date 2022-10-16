<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Tipo de Mercancia</h4>
<?php include 'templates/modals/tipo_mercancia/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Mercancia
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de mercancia </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tipo_mercancia";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarTipoMercancia<?php echo $mostrar['id'] ?>">
                                        <span class="tf-icons bx bx-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="eliminarTipoMercancia(<?php echo $mostrar['id'] ?>)">
                                        <span class="tf-icons bx bx-x-circle"></span>
                                    </button>
                                </td>
                            </tr>
                            <?php include 'templates/modals/tipo_mercancia/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>