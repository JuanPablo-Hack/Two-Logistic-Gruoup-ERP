<div class="card">
    <h5><strong>Registros de traspaleo</strong></h5>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info-2">
        <thead>
            <tr>
                <th>Ref. Interna</th>
                <th>Cliente</th>
                <th>Nombre del Producto</th>
                <th>Peso</th>
                <th>Cubicaje</th>
                <th>Temperatura</th>
                <th style="display: none;">Tipo embalaje</th>
                <th style="display: none;">No. Contenedores</th>
                <th style="display: none;">Transportista Entrada</th>
                <th style="display: none;">Transportista Salida</th>
                <th style="display: none;">Datos de Transportista Entrada</th>
                <th style="display: none;">Datos de Transportista Salida</th>
                <th style="display: none;">Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $IdOperador = $_SESSION['id'];
            $sql = "SELECT * FROM traspaleo WHERE id_operador = '$IdOperador'";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td> <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>
                <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                <td><?php
                        $sql1 = "SELECT * FROM tipo_producto WHERE id='" . $mostrar['tipo_producto'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                <td><?php echo $mostrar['peso'] ?></td>
                <td><?php echo $mostrar['cubicaje'] ?></td>
                <td><?php echo $mostrar['temp'] ?></td>
                <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_embalaje WHERE id='" . $mostrar['tipo_embalaje'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                <td style="display: none;"><?php echo $mostrar['no_contenedores'] ?></td>
                <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM transporte WHERE id='" . $mostrar['transportista_entrada'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM transporte WHERE id='" . $mostrar['transportista_salida'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                <td style="display: none;"><?php echo $mostrar['datos_entrada'] ?></td>
                <td style="display: none;"><?php echo $mostrar['datos_salida'] ?></td>
                <td style="display: none;"><?php echo $mostrar['descrip'] ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-icon item-edit" title="Detalles" data-bs-toggle="modal"
                        data-bs-target="#VerDetalles<?php echo $mostrar['id'] ?>"><i
                            class='bx bx-plus-circle'></i></button>
                    <button type="button" onclick="eliminarTraspaleo(<?php echo $mostrar['id'] ?>)"
                        class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                </td>
            </tr>
            <?php include 'templates/modals/bodega_externa/editar.php'; ?>
            <?php include 'templates/modals/bodega_externa/detalles_traspaleo.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>