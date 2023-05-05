<?php include 'templates/modals/inventario/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Producto
        </button>
    </div>
    <br>
    <h5><strong>Vista general</strong></h5>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Nombre del Producto</th>
                <th>Proveedor</th>
                <th>Descripción</th>
                <th style="display: none;">Peso Tara</th>
                <th style="display: none;">Peso Bruto</th>
                <th style="display: none;">Peso Bruto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM productos";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>

                    <td><?php
                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['razon_social'];
                        ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['proveedor'] ?></td>
                    <td><?php echo $mostrar['descrip'] ?></td>
                    <td style="display: none;"><?php echo number_format($mostrar['peso_tara'], 2, ".", ",")  ?></td>
                    <td style="display: none;"><?php echo number_format($mostrar['peso_bruto'], 2, ".", ",") ?></td>
                    <td style="display: none;"><?php echo number_format($mostrar['peso_neto'], 2, ".", ",") ?></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon item-edit" title="Entrada de Producto" data-bs-toggle="modal" data-bs-target="#EntradasProductos<?php echo $mostrar['id'] ?>"><i class='bx bx-list-plus'></i></button>
                        <button type="button" class="btn btn-sm btn-icon item-edit" title="Salida de Producto" data-bs-toggle="modal" data-bs-target="#SalidaProducto<?php echo $mostrar['id'] ?>"><i class='bx bx-message-square-minus'></i></button>
                        <button type="button" onclick="eliminarProductoInventario(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-trash'></i></button>
                    </td>
                </tr>
                <?php include 'templates/modals/inventario/entradas.php'; ?>
                <?php include 'templates/modals/inventario/salidas.php'; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>