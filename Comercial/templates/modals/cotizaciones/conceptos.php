<?php

$num_conceptos = $_POST["num_conceptos"];
for ($i = 0; $i < $num_conceptos; $i++) {
    $html = '
    <div class="row g-2">
         <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Servicio</label>
            <select class="form-control" name="conceptos[]">
                <option value="0">Sin Asignar</option>';
    $TiposServicios = ObtenerTiposServicios();
    while ($row = mysqli_fetch_array($TiposServicios)) {
        $html .= '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
    }
    $html .= '</select>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
            <div class="input-group input-group-merge">
                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cantidades[]" />
            </div>
        </div>
    </div>';
    echo $html;
}

function ObtenerTiposServicios()
{
    include '../../../php/conexion.php';
    $sql4 = "SELECT id,nombre FROM tipos_servicios";
    return mysqli_query($conexion, $sql4);
}
