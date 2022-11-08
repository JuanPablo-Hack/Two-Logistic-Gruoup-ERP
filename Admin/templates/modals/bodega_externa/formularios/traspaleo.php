<?php
$sql = "SELECT id,razon_social FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT id FROM servicios";
$result2 = mysqli_query($conexion, $sql2);
$sql3 = "SELECT * FROM tipo_embalaje";
$result3 = mysqli_query($conexion, $sql3);
$sql4 = "SELECT * FROM transporte";
$result4 = mysqli_query($conexion, $sql4);
$sql5 = "SELECT * FROM transporte";
$result5 = mysqli_query($conexion, $sql5);
?>
<form id="AltaTraspaleo">
    <div class="row g-2">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
            <select class="form-select" aria-label="Default select example" required name='cliente'>
                <option value="0">Selecciona un cliente</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='servicio'>
                <option value="0">Selecciona un mercancia</option>
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
            <label class="form-label" for="basic-icon-default-fullname">Peso</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Cubicaje</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cubicaje" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Temperatura</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="temperatura" required />
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
                <option value="0">Selecciona un tipo de embalaje</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result3)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
            <div class="input-group input-group-merge">
                <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="no_contenedores" required />
            </div>
        </div>

    </div>
    <div class="row g-4">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Transportista Entrada</label>
            <select class="form-select" aria-label=" Default select example" required name='transporte_entrada'>
                <option value="0">Selecciona un transportista</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result4)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Numero de entradas</label>
            <select class="form-select" required name='num_entradas' id="num_entradas" onchange="entrada()">
                <option value="0">Selecciona un transportista</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Transportista Salida</label>
            <select class="form-select" aria-label="Default select example" required name='transporte_salida'>
                <option value="0">Selecciona un transportista</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result5)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Numero de salidas</label>
            <select class="form-select" required name='num_salidas' id='num_salidas' onchange="salida()">
                <option value="0">Selecciona un transportista</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>
    <div id="transporte_entrada">

    </div>
    <div id="transporte_salida">

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
        <button type="submit" class="btn btn-primary">Agregar traspaleo</button>
    </div>
</form>