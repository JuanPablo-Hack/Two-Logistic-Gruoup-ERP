<?php include 'templates/modals/servicios/agregar.php'; ?>
<div class="card">
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
            $IdOperador = $_SESSION['id'];
            $sql = "SELECT * FROM servicios WHERE id_operador = '$IdOperador'";
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
                    <td><?php
                        $sql1 = "SELECT nombre FROM estados WHERE id='" . $mostrar['id_estado'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                    <td style="display: none;"><?php echo $mostrar['tipos_servicios'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['descripcion'] ?></td>
                    <td>
                        <?php
                        if ($mostrar['id_estado'] < 3) {
                        ?>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarServicio<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                        <?php
                        } else {
                        ?>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarServicio<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php include 'templates/modals/servicios/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>