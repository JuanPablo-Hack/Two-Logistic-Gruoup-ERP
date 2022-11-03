<?php
$num_conceptos = $_POST["num_conceptos"];
for ($i = 0; $i < $num_conceptos; $i++) {
    echo '
    <div class="row g-3">
         <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Servicio</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="conceptos[]" />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
            <div class="input-group input-group-merge">
                <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cantidades[]" />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Precio</label>
            <div class="input-group input-group-merge">
                <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="precios[]" />
            </div>
        </div>
    </div>';
}
