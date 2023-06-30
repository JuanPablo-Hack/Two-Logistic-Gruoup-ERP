<?php
$sql = "SELECT id,razon_social FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT id FROM servicios WHERE id_estado =1";
$result2 = mysqli_query($conexion, $sql2);
$sql3 = "SELECT id,nombre FROM agencias_aduanales";
$result3 = mysqli_query($conexion, $sql3);
$sql4 = "SELECT * FROM tipo_mercancia";
$result4 = mysqli_query($conexion, $sql4);
$sql5 = "SELECT * FROM tipo_plataforma";
$result5 = mysqli_query($conexion, $sql5);
$sql6 = "SELECT * FROM transporte";
$result6 = mysqli_query($conexion, $sql6);
?>
<form id="AltaviajeTerrestre">
    <input type="hidden" value="Viaje Terrestre" name="tipo_viaje">
    <div class="row g-2">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='servicio'>
                <option selected disabled>-Selecciona un servicio-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result2)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo 'OTL-' . date('Y') . '-' . $Row1['id']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Terminal</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="terminal" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Fecha del servicio</label>
            <div class="input-group input-group-merge">

                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="fecha_servicio" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Hora</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="hora" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
            <div class="input-group input-group-merge">
                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="no_contenedores" required />
            </div>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlTextarea1" class="form-label">Tipo de contenedores</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tipo_contenedor"></textarea>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Viaje</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_viaje_terrestre" required>
                <option selected disabled>-Selecciona un tipo de viaje-</option>
                <option value="1">Local</option>
                <option value="2">Foraneo</option>
            </select>
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
            <label for="exampleFormControlSelect1" class="form-label">Agente Aduanal</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="agente_aduanal" required>
                <option selected disabled>-Selecciona un agente aduanal-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result3)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Mercancia</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_mercancia" required>
                <option selected disabled>-Selecciona un tipo de mercancia-</option>
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
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Plataforma</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="tipo_plataforma" required>
                <option selected disabled>-Selecciona un tipo de plataforma-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result5)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Transportista</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="transporte" required>
                <option selected disabled>-Selecciona un transportista-</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result6)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
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