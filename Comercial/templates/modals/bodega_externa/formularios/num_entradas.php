<?php
$num_conceptos = $_POST["num_conceptos"];
echo '  <br>
<h3>Datos de Entrada</h3>
<hr>';
for ($i = 0; $i < $num_conceptos; $i++) {
    echo '
    <div class="row g-4">
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Nombre Operador</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="datos_entrada[]" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Placas</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="datos_entrada[]" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">No. Remolque</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="datos_entrada[]" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Teléfono</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="datos_entrada[]" required />
            </div>
        </div>
    </div>';
}
