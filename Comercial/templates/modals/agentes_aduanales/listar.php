<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de Agente Aduanal</h4>
<?php include 'templates/modals/agentes_aduanales/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Agente Aduanal
    </button>
    <div class="card">
        <h5 class="card-header">Lista de tipo de agencias aduanales </h5>
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
                        $sql = "SELECT * FROM agencias_aduanales";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td>
                                    <div class="demo-inline-spacing">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarAgenteAduanal<?php echo $mostrar['id'] ?>">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="eliminarAgenciaAduanal(<?php echo $mostrar['id'] ?>)">
                                            <span class="tf-icons bx bx-x-circle"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php include 'templates/modals/agentes_aduanales/editar.php' ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>