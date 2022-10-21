<?php include 'templates/modals/contratos/agregar.php'; ?>
<div class="card">
    <div class="demo-inline-spacing">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Agregar Contrato
        </button>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Proveedor</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contratos";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>

                    <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['id_cliente'] ?>"><?php
                                                                                                            $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                                                                                                            $result1 = mysqli_query($conexion, $sql1);
                                                                                                            $Row = mysqli_fetch_array($result1);
                                                                                                            echo $Row['razon_social'];
                                                                                                            ?></a></td>
                    <td><a href="./detalles_cliente.php?id_cliente=<?php echo $mostrar['id_cliente'] ?>"><?php
                                                                                                            $sql1 = "SELECT * FROM proveedores WHERE id='" . $mostrar['id_proveedor'] . "'";
                                                                                                            $result1 = mysqli_query($conexion, $sql1);
                                                                                                            $Row = mysqli_fetch_array($result1);
                                                                                                            echo $Row['razon_social'];
                                                                                                            ?></a></td>


                    <td><?php echo $mostrar['descripcion'] ?></td>
                    <td>
                        <button type="button" onclick="eliminarContrato(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Generar PDF"><i class='bx bxs-file-pdf'></i></button>
                        <button type="button" onclick="eliminarContrato(<?php echo $mostrar['id'] ?>)" class="btn btn-sm btn-icon item-edit" title="Eliminar"><i class='bx bx-x-circle'></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>