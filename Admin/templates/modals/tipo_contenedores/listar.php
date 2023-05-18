<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Tipo de Contenedor</h4>
<?php include 'templates/modals/tipo_contenedores/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Contenedor
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de contenedor </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tipos_contenedores";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>

                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarTipoContenedor<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                                    <button type="button" onclick="eliminarTipoContenedor(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                                </td>
                            </tr>
                            <?php include 'templates/modals/tipo_contenedores/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>