<?php include 'templates/modals/viajes/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Viaje
        </button>
    </div>
    <br>
    <h5><strong>Viajes maritmos / áereos</strong></h5>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Tipo de Viaje</th>
                <th>Ref. Interna</th>
                <th>Cliente</th>
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
            $IdOperador = $_SESSION['id'];
            $sql = "SELECT * FROM viajes WHERE id_operador = '$IdOperador'";
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
                    <td><?php echo $mostrar['comentarios'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display:none;">
                        <?php echo $mostrar['booking'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['naviera'] ?>
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
                        <?php echo $mostrar['cierre_documental'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['vgm'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['carta_instru'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['id_tipo_liberacion'] ?>
                    </td>
                    <td>
                        <?php
                        if ($mostrar['id_estado'] < 3) {
                        ?>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,2)" class="btn btn-sm btn-icon item-edit" title="Atender"><i class='bx bxs-file-export'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,3)" class="btn btn-sm btn-icon item-edit" title="Finalizar"><i class='bx bx-badge-check'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                    </td>
                <?php
                        }
                ?>
                </tr>
                <?php include 'templates/modals/viajes/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div class="card">
    <h5><strong>Viajes Terrestres</strong></h5>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info-2">
        <thead>
            <tr>
                <th>Ref. Interna</th>
                <th>Cliente</th>
                <th>Peso</th>
                <th>Bultos</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th style="display:none;">Terminal</th>
                <th style="display:none;">Fecha Servicio</th>
                <th style="display:none;">Hora</th>
                <th style="display:none;">No. Contenedores</th>
                <th style="display:none;">Tipo de contenedores</th>
                <th style="display:none;">Tipo de Viaje</th>
                <th style="display:none;">Agente Aduanal</th>
                <th style="display:none;">Tipo Mercancia</th>
                <th style="display:none;">Tipo Plataforma</th>
                <th style="display:none;">Transportista</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM viajes_terrestres WHERE id_operador = '$IdOperador'";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
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
                    <td><?php echo $mostrar['comentarios'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display:none;">
                        <?php echo $mostrar['terminal'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['fecha_servicio'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['hora'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['no_contenedores'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['tipo_contenedores'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['tipo_viaje'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['id_agente_aduanal'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['id_tipo_mercancia'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['id_plataforma'] ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['transportista'] ?>
                    </td>
                    <td>
                        <?php
                        if ($mostrar['id_estado'] < 3) {
                        ?>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,2)" class="btn btn-sm btn-icon item-edit" title="Atender"><i class='bx bxs-file-export'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,3)" class="btn btn-sm btn-icon item-edit" title="Finalizar"><i class='bx bx-badge-check'></i></button>
                            <button type="button" onclick="CambiarEstado(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                    </td>
                <?php
                        }
                ?>
                </tr>
                <?php include 'templates/modals/viajes/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>