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
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Cotizacion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- TODO: Revisar el envio del formulario la función no jala -->
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Cotizacion agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <form action="php/test.php" method="post">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                            <select class="form-control" name='cliente'>
                                <option value="0">Sin Asignar</option>
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
                            <label for="exampleFormControlSelect1" class="form-label">No. de conceptos</label>
                            <select class="form-select" id="num_conceptos" aria-label="Default select example" name="no_conceptos" required onchange="cambiar_conceptos()">
                                <option selected>Selecciona un cliente</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div style="display: none;" id="concepto_1">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Concepto no.1</label>
                                <select class="form-control" name='concepto_1'>
                                    <option value="0">Sin Asignar</option>
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
                                <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
                                <div class="input-group input-group-merge">

                                    <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto_oper" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" id="concepto_2">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Concepto no.2</label>
                                <select class="form-control" name='concepto_2'>
                                    <option value="0">Sin Asignar</option>
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
                                <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
                                <div class="input-group input-group-merge">

                                    <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto_oper" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" id="concepto_3">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Concepto no.3</label>
                                <select class="form-control" name='concepto_1'>
                                    <option value="0">Sin Asignar</option>
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
                                <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
                                <div class="input-group input-group-merge">
                                    <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto_oper" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" id="concepto_4">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Concepto no.4</label>
                                <select class="form-control" name='concepto_1'>
                                    <option value="0">Sin Asignar</option>
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
                                <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
                                <div class="input-group input-group-merge">

                                    <input type="number" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="contacto_oper" required />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Cotizacion</button>
            </div>
            </form>
        </div>
    </div>
</div>