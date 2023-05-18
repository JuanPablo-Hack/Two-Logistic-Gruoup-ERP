<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables de Entorno /</span> Lista de tipo de servicios</h4>
<?php include 'templates/modals/tipos_servicios/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Tipo de Servicio
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de servicios </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tipos_servicios";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>

                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td><?php echo $mostrar['precio'] ?></td>
                                <td><?php echo $mostrar['descripcion'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarTipos_servicios<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                                    <button type="button" onclick="eliminarTipoSercvicio(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                                </td>
                            </tr>
                            <?php include('templates/modals/tipos_servicios/editar.php'); ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>