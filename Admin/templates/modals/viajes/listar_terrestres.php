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
                <th style="display:none;">Comentarios Finales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM viajes_terrestres";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td> <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>
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
                        <?php
                        $sql1 = "SELECT * FROM agencias_aduanales WHERE id='" . $mostrar['id_agente_aduanal'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?>
                    </td>
                    <td style="display:none;">
                        <?php
                        $sql1 = "SELECT * FROM tipo_mercancia WHERE id='" . $mostrar['id_tipo_mercancia'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?>
                    </td>
                    <td style="display:none;">
                        <?php
                        $sql1 = "SELECT * FROM tipo_plataforma WHERE id='" . $mostrar['id_plataforma'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?>
                    </td>
                    <td style="display:none;">
                        <?php
                        $sql1 = "SELECT * FROM transporte WHERE id='" . $mostrar['transportista'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?>
                    </td>
                    <td style="display:none;">
                        <?php echo $mostrar['comentarios_finales'] ?>
                    </td>
                    <td>
                        <?php
                        if ($mostrar['id_estado'] < 3) {
                        ?>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Detalles" data-bs-toggle="modal" data-bs-target="#VerDetalles<?php echo $mostrar['id'] ?>"><i class='bx bx-plus-circle'></i></button>
                            <button type="button" class="btn btn-sm btn-icon item-edit" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarServicio<?php echo $mostrar['id'] ?>"><i class="bx bxs-edit"></i></button>
                            <button type="button" onclick="CambiarEstadoTerrestre(<?php echo $mostrar['id'] ?>,3)" class="btn btn-sm btn-icon item-edit" title="Editar"><i class='bx bx-badge-check'></i></button>
                            <button type="button" onclick="CambiarEstadoTerrestre(<?php echo $mostrar['id'] ?>,4)" class="btn btn-sm btn-icon item-edit" title="Cancelar"><i class='bx bx-x-circle'></i></button>
                    </td>
                <?php
                        }
                ?>
                </tr>
                <?php include 'templates/modals/viajes/editar_terrestre.php'; ?>
                <?php include 'templates/modals/viajes/detalles_terrestres.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>