<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Variables del sistema /</span> Lista de trabajadores</h4>
<?php include 'templates/modals/usuarios/agregar.php' ?>
<div class="demo-inline-spacing">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
        Agregar Usuario
    </button>
    <div class="card">
        <h5 class="card-header">Lista de usuarios </h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Correo</th>
                            <th>Cargo</th>
                            <th>Rol</th>
                            <th>Teléfono</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM trabajador";
                        $resultado = $conexion->query($sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>

                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td><?php echo $mostrar['correo'] ?></td>
                                <td><?php echo $mostrar['cargo'] ?></td>

                                <td><?php
                                    $sql1 = "SELECT * FROM roles WHERE id='" . $mostrar['rol'] . "'";
                                    $result1 = mysqli_query($conexion, $sql1);
                                    $Row = mysqli_fetch_array($result1);
                                    echo $Row['rol'];
                                    ?></td>
                                <td><?php echo $mostrar['tel'] ?></td>
                                <td>
                                    <div class="demo-inline-spacing">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarUsuario<?php echo $mostrar['id'] ?>">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="eliminarUsuario(<?php echo $mostrar['id'] ?>)">
                                            <span class="tf-icons bx bx-x-circle"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php include('templates/modals/usuarios/editar.php'); ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>