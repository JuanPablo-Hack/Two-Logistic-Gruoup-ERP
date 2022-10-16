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
                <table class="table table-bordered" id="table">
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
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarTipos_servicios<?php echo $mostrar['id'] ?>">
                                        <span class="tf-icons bx bx-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="eliminarTipoSercvicio(<?php echo $mostrar['id'] ?>)">
                                        <span class="tf-icons bx bx-x-circle"></span>
                                    </button>
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