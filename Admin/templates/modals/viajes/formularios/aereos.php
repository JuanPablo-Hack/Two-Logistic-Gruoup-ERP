<?php
$sql = "SELECT id,razon_social FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql3 = "SELECT id FROM servicios";
$result3 = mysqli_query($conexion, $sql3);
$sql4 = "SELECT * FROM tipos_liberacion";
$result4 = mysqli_query($conexion, $sql4);
?>
<form id="AltaviajeAereo">
    <input type="hidden" value="Viaje Áereo" name="tipo_viaje">
    <div class="row g-2">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='servicio'>
                <option value="0" selected disabled>-Selecciona un servicio-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result3)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo 'OTL-' . date('Y') . '-' . $Row1['id']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='cliente'>
                <option value="0" selected disabled>-Selecciona un cliente-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">No. Booking</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="booking" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Línea naviera</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="linea_naviera" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
            <div class="input-group input-group-merge">
                <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="no_contenedores" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label for="exampleFormControlTextarea1" class="form-label">Tipo de contenedores</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tipo_contenedor"></textarea>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Buque</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="buque" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Viaje</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="viaje" required />
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Peso</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Bultos</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="bultos" required />
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Puerto de Carga</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_carga" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Puerto de Transbordo</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_transbordo" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Puerto de Destino</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_destino" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Puerto de Tránsito</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_transito" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Tiempo de Tránsito</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="tiempo_transito" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Cierre Documental</label>
            <div class="input-group input-group-merge">

                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cierre" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">VGM</label>
            <div class="input-group input-group-merge">

                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="vgm" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <div class="col-md">
                <label for="exampleFormControlSelect1" class="form-label">Documentación</label>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="check_lista" />
                    <label class="form-check-label" for="defaultCheck1"> Carta instrucciones </label>
                </div>
            </div>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de liberación</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='liberacion'>
                <option value="0">Selecciona un cliente</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result4)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Cerrar
        </button>
        <button type="submit" class="btn btn-primary">Agregar Viaje</button>
    </div>
</form>