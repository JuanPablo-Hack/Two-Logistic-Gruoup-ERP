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
                <th>Cliente</th>
                <th>No. de Conceptos</th>
                <th>Conceptos</th>
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

                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php echo $mostrar['no_conceptos'] ?></td>
                    <td><?php echo $mostrar['arreglo'] ?></td>
                    <td>
                        <button type="button" onclick="eliminarContrato(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Generar PDF"><i class='bx bxs-file-pdf'></i></button>
                        <button type="button" onclick="eliminarCotizacion(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/viajes/editar.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>