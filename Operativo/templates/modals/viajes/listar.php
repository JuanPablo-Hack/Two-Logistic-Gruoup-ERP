<?php include 'templates/modals/viajes/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Viaje
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Tipo de Viaje</th>
                <th>Cliente</th>
                <th>Ref. Interna</th>
                <th>Peso</th>
                <th>Bultos</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th style="display:none;">Booking</th>
                <th style="display:none;">Linea naviera</th>
                <th style="display:none;">No. contenedores</th>
                <th style="display:none;">Tipo contenedores</th>
                <th style="display:none;">Buque</th>
                <th style="display:none;">Viaje</th>
                <th style="display:none;">Puerto carga</th>
                <th style="display:none;">Puerto transbordo</th>
                <th style="display:none;">Puerto destino</th>
                <th style="display:none;">Puerto transito</th>
                <th style="display:none;">Tiempo Transito</th>
                <th style="display:none;">Cierre</th>
                <th style="display:none;">VGM</th>
                <th style="display:none;">Documentación</th>
                <th style="display:none;">Tipo liberacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM viajes";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['tipo_viaje'] ?></td>
                    <td><?php echo 'OTL-' . date('Y') . '-' . $mostrar['id_servicio']; ?></td>
                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php echo $mostrar['peso'] ?></td>
                    <td><?php echo $mostrar['bultos'] ?></td>
                    <td><?php
                        $sql1 = "SELECT nombre FROM estados WHERE id='" . $mostrar['id_estado'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                    <td><?php echo $mostrar['descrip'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display:none;">
                        <?php echo $mostrar['booking'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['linea_naviera'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['no_contenedores'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['tipo_contenedores'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['buque'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['viaje'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['puerto_carga'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['puerto_transbordo'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['puerto_destino'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['puerto_transito'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['tiempo_transito'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['cierre'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['vgm'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['docu'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['tipo_liberacion'] ?>
                    </td>
                    <td>
                        <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,2)" class="btn btn-sm btn-icon item-edit" title="Atender"><i class='bx bxs-file-export'></i></button>
                        <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,3)" class="btn btn-sm btn-icon item-edit" title="Finalizar"><i class='bx bx-badge-check'></i></button>
                        <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/viajes/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>