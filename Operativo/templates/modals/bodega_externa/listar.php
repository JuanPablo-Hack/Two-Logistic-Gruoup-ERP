<?php include 'templates/modals/bodega_externa/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Registro
        </button>
    </div>
    <br>
    <h5><strong>Registros de almacenaje</strong></h5>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Ref. Interna</th>
                <th>Cliente</th>
                <th>Operador</th>
                <th>Nombre del Producto</th>
                <th>Peso</th>
                <th>Cubicaje</th>
                <th style="display: none;">Tipo de Producto</th>
                <th style="display: none;">Tipo de embalaje</th>
                <th style="display: none;">Entrada a Almacen</th>
                <th style="display: none;">Salida de Almacen</th>
                <th style="display: none;">Documentos</th>
                <th style="display: none;">Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $IdOperador = $_SESSION['id'];
            $sql = "SELECT * FROM almacenaje WHERE id_operador = '$IdOperador'";
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
                        $sql1 = "SELECT * FROM trabajador WHERE id='" . $mostrar['id_operador'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                <td><?php echo $mostrar['nombre_producto'] ?></td>
                <td><?php echo $mostrar['peso'] ?></td>
                <td><?php echo $mostrar['cubicaje'] ?></td>
                <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_mercancia WHERE id='" . $mostrar['tipo_producto'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                <td style="display: none;"><?php
                                                $sql1 = "SELECT * FROM tipo_embalaje WHERE id='" . $mostrar['tipo_embalaje'] . "'";
                                                $result1 = mysqli_query($conexion, $sql1);
                                                $Row = mysqli_fetch_array($result1);
                                                echo $Row['nombre'];
                                                ?></td>
                <td style="display: none;"><?php echo $mostrar['dias_almacen'] ?></td>
                <td style="display: none;"><?php echo $mostrar['salida'] ?></td>
                <td style="display: none;"><?php echo $mostrar['documentos'] ?></td>
                <td style="display: none;"><?php echo $mostrar['descrip'] ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-icon item-edit" title="Detalles" data-bs-toggle="modal"
                        data-bs-target="#VerDetalles<?php echo $mostrar['id'] ?>"><i
                            class='bx bx-plus-circle'></i></button>
                    <button type="button" onclick="eliminarAlmacenaje(<?php echo $mostrar['id'] ?>)"
                        class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                </td>
            </tr>
            <?php include 'templates/modals/bodega_externa/editar.php'; ?>
            <?php include 'templates/modals/bodega_externa/detalles.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>