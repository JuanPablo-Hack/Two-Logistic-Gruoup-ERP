<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM tipo_mercancia";
    $result2 = mysqli_query($conexion, $sql2);
    $sql3 = "SELECT * FROM tipo_carga";
    $result3 = mysqli_query($conexion, $sql3);
    $sql4 = "SELECT * FROM proveedores";
    $result4 = mysqli_query($conexion, $sql4);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Despacho Aduanal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Despacho Aduanal agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <form id="AltaDespacho">
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de operación</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='tipo_oper'>
                                <option selected>Selecciona un tipo de operación</option>
                                <option value="Importación">Importación</option>
                                <option value="Exportación">Exportación</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='cliente'>
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
                            <label for="exampleFormControlSelect1" class="form-label">Proveedor</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" required name='proveedor'>
                                <option value="0">Selecciona un proveedor</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result4)) {
                                ?>
                                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Aduana de despacho</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="aduana"
                                    required />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Terminal portuaria</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" required />
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de mercancia</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="mercancia" required>
                                <option selected>Selecciona un tipo de mercancia</option>
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
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de Carga</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="carga" required>
                                <option selected>Selecciona un tipo de carga</option>
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
                    <div class="row">
                        <div class="col mb-0">
                            <div class="col-md">
                                <label for="exampleFormControlSelect1" class="form-label">Documentación</label>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Factura" id="defaultCheck1"
                                        name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Factura</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Lista de Embarque"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Lista de Embarque</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="BL" id="defaultCheck1"
                                        name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> BL</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Ficha Técnica"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Ficha Técnica</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Póliza de Seguro"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Póliza de Seguro</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Póliza de Transporte"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Póliza de Transporte</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Carta Garantía"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Carta Garantía</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="Hoja de Seguridad"
                                        id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> Hoja de Seguridad</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="descripcion"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Despacho Aduanal</button>
                <button type="button" class="btn btn-outline-secondary" id="btn-imprimir">
                    Imprimir
                </button>
            </div>
            </form>
        </div>
    </div>
</div>