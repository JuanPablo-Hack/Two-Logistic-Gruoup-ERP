<?php
$sql = "SELECT id,razon_social FROM clientes";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT * FROM tipos_servicios";
$result2 = mysqli_query($conexion, $sql2);
$sql3 = "SELECT * FROM tipo_mercancia";
$result3 = mysqli_query($conexion, $sql3);
$sql4 = "SELECT * FROM tipo_embalaje";
$result4 = mysqli_query($conexion, $sql4);
$sql5 = "SELECT * FROM transporte";
$result5 = mysqli_query($conexion, $sql5);
?>
<form id="AltaAlmacenaje">
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
            <label class="form-label" for="basic-icon-default-fullname">Nombre de Producto</label>
            <div class="input-group input-group-merge">

                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nombre_producto" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Servicio</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_servicio'>
                <option value="0">Selecciona un cliente</option>
                <?php
                while ($Row1 = mysqli_fetch_array($result2)) {
                ?>
                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de Mercancia</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_producto'>
                <option value="0">Selecciona un cliente</option>
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
            <label class="form-label" for="basic-icon-default-fullname">Tipo de unidad</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="unidad" required />
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
            <label class="form-label" for="basic-icon-default-fullname">Cubicaje</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cubicaje" required />
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col mb-0">
            <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
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
            <label class="form-label" for="basic-icon-default-fullname">Fecha de entrada</label>
            <div class="input-group input-group-merge">
                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="dias_almacen" required />
            </div>
        </div>
        <div class="col mb-0">
            <label class="form-label" for="basic-icon-default-fullname">Fecha de salida</label>
            <div class="input-group input-group-merge">
                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="salida" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <div class="col-md">
                <label for="exampleFormControlSelect1" class="form-label">Documentación</label>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="Carta de Instrucciones" id="defaultCheck1" name="check_lista[]" />
                    <label class="form-check-label" for="defaultCheck1"> Carta de Instrucciones</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="Factura" id="defaultCheck1" name="check_lista[]" />
                    <label class="form-check-label" for="defaultCheck1"> Factura</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="Packing List" id="defaultCheck1" name="check_lista[]" />
                    <label class="form-check-label" for="defaultCheck1"> Packing List</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="Ficha Técnica" id="defaultCheck1" name="check_lista[]" />
                    <label class="form-check-label" for="defaultCheck1"> Ficha Técnica</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="Fotografías" id="defaultCheck1" name="check_lista[]" />
                    <label class="form-check-label" for="defaultCheck1"> Fotografías</label>
                </div>

            </div>
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
        <button type="submit" class="btn btn-primary">Agregar Almacenaje</button>
    </div>
</form>