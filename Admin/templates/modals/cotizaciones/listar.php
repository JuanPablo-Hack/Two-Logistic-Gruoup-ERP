<?php include 'templates/modals/cotizaciones/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Cotización
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Cliente</th>
                <th>No. de Conceptos</th>
                <th>Creado</th>
                <th style="display: none;">Conceptos</th>
                <th style="display: none;">Cantidades</th>
                <th style="display: none;">Precios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM cotizaciones";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo "COT-" . date('Y') . "-" . $mostrar['id'] ?></td>
                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php echo $mostrar['no_conceptos'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['conceptos'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['cantidades'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['precios'] ?></td>
                    <td>
                        <button type="button" onclick="crearPDF(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Generar PDF"><i class='bx bxs-file-pdf'></i></button>
                        <button type="button" onclick="eliminarCotizacion(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>