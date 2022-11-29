<div class="card">
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
            <tr>
                <th>Material</th>
                <th>Ticket</th>
                <th>Placas</th>
                <th>Descripción</th>
                <th>Fecha de Creación</th>
                <th style="display: none;">Peso Tara</th>
                <th style="display: none;">Peso Bruto</th>
                <th style="display: none;">Peso Bruto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM entradas_productos";
            $resultado = $conexion->query($sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <tr>

                    <td><?php
                        $sql1 = "SELECT * FROM productos WHERE id='" . $mostrar['material'] . "'";
                        $result1 = mysqli_query($conexion, $sql1);
                        $Row = mysqli_fetch_array($result1);
                        echo $Row['nombre'];
                        ?></td>
                    <td><?php echo $mostrar['ticket'] ?></td>
                    <td><?php echo $mostrar['placas'] ?></td>
                    <td><?php echo $mostrar['descrip'] ?></td>
                    <td><?php echo $mostrar['creado'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['peso_bruto'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['peso_tara'] ?></td>
                    <td style="display: none;"><?php echo $mostrar['peso_neto'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>