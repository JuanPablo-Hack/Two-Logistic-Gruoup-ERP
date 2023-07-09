<?php include 'templates/modals/despachos/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Despacho Aduanal
        </button>
    </div>
    <br>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Tipo de Despacho Aduanal</th>
                <th>Ref. Interna</th>
                <th>Cliente</th>
                <th>Operador</th>
                <th>Proveedor</th>
                <th>Estado</th>
                <th style="display: none;">Aduana</th>
                <th style="display: none;">Terminal</th>
                <th style="display: none;">Creado</th>
                <th style="display: none;">Mercancia</th>
                <th style="display: none;">Carga</th>
                <th style="display: none;">Documentación</th>
                <th style="display: none;">Comentarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM despacho";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['tipo_despacho'] ?></td>
                    <td> <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>
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
                    <td><?php
                        $sql1 = "SELECT * FROM proveedores WHERE id='" . $mostrar['id_proveedor'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>

                    <td><?php
                        $sql1 = "SELECT nombre FROM estados WHERE id='" . $mostrar['id_estado'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                    <td style="display: none;"><?php echo $mostrar['aduana'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['terminal'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['creado'] ?></td>
                    <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_mercancia WHERE id='" . $mostrar['id_tipo_mercancia'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                    <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_carga WHERE id='" . $mostrar['id_tipo_carga'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                    <td style="display: none;"><?php echo $mostrar['documentacion'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['comentarios'] ?></td>
                    <td>
                        <?php
                        if ($mostrar['id_estado'] < 3) {
                        ?>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Detalles" data-bs-toggle="modal" data-bs-target="#VerDetalles<?php echo $mostrar['id'] ?>"><i class='bx bx-plus-circle'></i></button>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarServicio<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,2)" class="btn btn-sm btn-icon item-edit" title="Atender"><i class='bx bxs-file-export'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,3)" class="btn btn-sm btn-icon item-edit" title="Editar"><i class='bx bx-badge-check'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                        <?php
                        } else {
                        ?>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Detalles" data-bs-toggle="modal" data-bs-target="#VerDetalles<?php echo $mostrar['id'] ?>"><i class='bx bx-plus-circle'></i></button>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarDespacho<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php include 'templates/modals/despachos/editar.php'; ?>
                <?php include 'templates/modals/despachos/detalles.php'; ?>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>