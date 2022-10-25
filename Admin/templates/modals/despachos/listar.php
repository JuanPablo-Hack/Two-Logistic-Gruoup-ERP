<?php include 'templates/modals/despachos/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Despacho Aduanal
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Tipo de Despacho Aduanal</th>
                <th>Cliente</th>
                <th>Proveedor</th>
                <th>Aduana</th>
                <th>Terminal</th>
                <th>Creado</th>
                <th style="display: none;">Mercancia</th>
                <th style="display: none;">Carga</th>
                <th style="display: none;">Documentación</th>
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
                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php
                        $sql1 = "SELECT * FROM proveedores WHERE id='" . $mostrar['proveedor'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php echo $mostrar['aduana'] ?></td>
                    <td><?php echo $mostrar['terminal'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_mercancia WHERE id='" . $mostrar['tipo_mercancia'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                    <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_carga WHERE id='" . $mostrar['tipo_carga'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                    <td style="display: none;"><?php echo $mostrar['documentacion'] ?></td>
                    <td>
                        <!-- TODO: Terminar el editar de este apartado -->
                        <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarDespacho<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                        <button type="button" onclick="eliminarDespacho(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/despachos/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>