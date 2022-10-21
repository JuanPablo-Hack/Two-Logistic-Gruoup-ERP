<?php include 'templates/modals/servicios/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Servicio
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Cliente</th>
                <th>Operador</th>
                <th>Fecha Servicio</th>
                <th>Estado</th>
                <th style="display: none;">Tipo de Servicios</th>
                <th style="display: none;">Descripción</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM servicios";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td> <?php echo 'OTL-' . date('Y') . '-' . $mostrar['id']; ?>
                    </td>
                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php
                        $sql1 = "SELECT * FROM trabajador WHERE id='" . $mostrar['id_operador'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>

                    <td><?php echo $mostrar['fecha_servicio'] ?></td>
                    <td><span class="badge bg-label-primary me-1">En Progreso</span></td>
                    <td><?php echo $mostrar['tipos_servicios'] ?></td>
                    <td><?php echo $mostrar['descripcion'] ?></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarServicio<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                        <button type="button" onclick="eliminarServicio(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/servicios/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>