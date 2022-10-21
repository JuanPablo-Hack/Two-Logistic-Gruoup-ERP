<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM tipos_servicios";
    $result2 = mysqli_query($conexion, $sql2);
    $sql3 = "SELECT * FROM tipos_servicios";
    $result3 = mysqli_query($conexion, $sql3);
    $sql4 = "SELECT * FROM tipos_servicios";
    $result4 = mysqli_query($conexion, $sql4);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Viaje</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Viaje agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <div class="row">
                    <div class="col mb-0">
                        <label for="exampleFormControlSelect1" class="form-label">Tipo de Registro</label>
                        <select class="form-select" id="num_conceptos" aria-label="Default select example" name="no_conceptos" required onchange="cambiar_conceptos()">
                            <option selected>Selecciona un cliente</option>
                            <option value="1">Almacenaje</option>
                            <option value="2">Traspaleo</option>
                        </select>
                    </div>
                </div>
                <br>
                <div style="display: none;" id="concepto_1">
                    <form>
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
                                <label for="exampleFormControlSelect1" class="form-label">Tipo de Unidad</label>
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
                                    <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="bultos" required />
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
                                <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
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
                                <label class="form-label" for="basic-icon-default-fullname">Fecha de entrada</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="dias_almacen" required />
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label class="form-label" for="basic-icon-default-fullname">Fecha de salida</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="dias_almacen" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <div class="col-md">
                                    <label for="exampleFormControlSelect1" class="form-label">Documentación</label>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                        <label class="form-check-label" for="defaultCheck1"> Carta de Instrucciones</label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                        <label class="form-check-label" for="defaultCheck1"> Factura</label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                        <label class="form-check-label" for="defaultCheck1"> Packing List</label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
                                        <label class="form-check-label" for="defaultCheck1"> Ficha Técnica</label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="Si" id="defaultCheck1" name="check_lista[]" />
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
                </div>
                <div style="display: none;" id="concepto_2">
                    <form>
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
                                <label for="exampleFormControlSelect1" class="form-label">Ref. Interna ¿</label>
                                <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_producto'>
                                    <option value="0">Selecciona un mercancia</option>
                                    <?php
                                    while ($Row1 = mysqli_fetch_array($result3)) {
                                    ?>
                                        <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
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

                                    <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cubicaje" required />
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
                                <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
                                    <option value="0">Selecciona un tipo de embalaje</option>
                                    <?php
                                    while ($Row1 = mysqli_fetch_array($result2)) {
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
                                    <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_carga" required />
                                </div>
                            </div>

                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Transportista Entrada</label>
                                <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
                                    <option value="0">Selecciona un transportista</option>
                                    <?php
                                    while ($Row1 = mysqli_fetch_array($result2)) {
                                    ?>
                                        <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Transportista Salida</label>
                                <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_embalaje'>
                                    <option value="0">Selecciona un transportista</option>
                                    <?php
                                    while ($Row1 = mysqli_fetch_array($result2)) {
                                    ?>
                                        <option value=<?php echo $Row1['id']; ?>><?php echo  $Row1['nombre']; ?></option>
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
                            <button type="submit" class="btn btn-primary">Agregar traspaleo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>