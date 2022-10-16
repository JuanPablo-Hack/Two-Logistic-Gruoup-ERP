<?php include 'templates/modals/clientes/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar clientes
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Razón Social</th>
                <th>RFC</th>
                <th>Domicilio</th>
                <th>Estado Empresarial</th>
                <th>Representante</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM clientes";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>

                    <td><?php echo $mostrar['razon_social'] ?></td>
                    <td><?php echo $mostrar['rfc'] ?></td>
                    <td><?php echo $mostrar['domicilio'] ?></td>
                    <td><?php echo $mostrar['estado_empresarial'] ?></td>
                    <td><?php echo $mostrar['nombre_representante'] ?></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarCliente<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                        <button type="button" onclick="eliminarCliente(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/clientes/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>