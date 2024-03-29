<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM catalogo_servicios";
    $result = $conexion->query($sql);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="php/clientes_controller.php" method="post">
                    <input type="hidden" name="accion" value="editar">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id'] ?>">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Razón Social</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" readonly id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="razon_social" value="<?php echo $mostrar['razon_social'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">RFC</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input type="text" id="basic-icon-default-company" class="form-control" readonly
                                    aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="rfc"
                                    value="<?php echo $mostrar['rfc'] ?>" />
                            </div>
                        </div>
                    </div>
                    <?php $datos_comercial = explode(",", $mostrar['datos_comercial']);
                    $datos_operacion = explode(",", $mostrar['datos_operacion']);
                    $datos_admin = explode(",", $mostrar['datos_admin']); ?>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Nombre comercial</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" readonly id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="contacto_comer" value="<?php echo $datos_comercial[0] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control" readonly
                                    aria-label="john.doe" aria-describedby="basic-icon-default-email2"
                                    name="email_comer" value="<?php echo $datos_comercial[1] ?>" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>

                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" readonly
                                    class="form-control phone-mask" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" name="tel_comer"
                                    value="<?php echo $datos_comercial[2] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Nombre operativo</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" readonly id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="contacto_oper" value="<?php echo $datos_operacion[0] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control" readonly
                                    aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email_oper"
                                    value="<?php echo $datos_operacion[1] ?>" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>

                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" readonly
                                    class="form-control phone-mask" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" name="tel_oper"
                                    value="<?php echo $datos_operacion[2] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Nombre administrativo</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" readonly id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="contacto_admin" value="<?php echo $datos_admin[0] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control" readonly
                                    aria-label="john.doe" aria-describedby="basic-icon-default-email2"
                                    name="email_admin" value="<?php echo $datos_admin[1] ?>" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>

                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" readonly
                                    class="form-control phone-mask" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" name="tel_admin"
                                    value="<?php echo $datos_admin[2] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Domicilio</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input type="text" id="basic-icon-default-company" class="form-control" readonly
                                    aria-label="ACME Inc." aria-describedby="basic-icon-default-company2"
                                    name="domicilio" value="<?php echo $mostrar['domicilio'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Situación Fiscal</label>
                            <input type="text" id="basic-icon-default-company" class="form-control" readonly
                                value="<?php
                                                                                                                    $sql1 = " SELECT nombre FROM situacion_fiscal WHERE id='" . $mostrar['estado_empresarial']
                                                                                                                        . "'";
                                                                                                                    $result1 = mysqli_query($conexion, $sql1);
                                                                                                                    $Row = mysqli_fetch_array($result1);
                                                                                                                    echo
                                                                                                                    $Row['nombre']; ?>" />
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Nombre del representante</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input type="text" id="basic-icon-default-company" class="form-control" readonly
                                    aria-label="ACME Inc." aria-describedby="basic-icon-default-company2"
                                    name="nombre_representante"
                                    value="<?php echo $mostrar['nombre_representante'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Días de Crédito</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" id="basic-icon-default-company" class="form-control"
                                    readonly aria-label="ACME Inc." aria-describedby="basic-icon-default-company2"
                                    name="credito" value="<?php echo $mostrar['credito'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Días de almacenamiento</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" id="basic-icon-default-company" class="form-control"
                                    readonly aria-label="ACME Inc." aria-describedby="basic-icon-default-company2"
                                    name="almacenamiento" value="<?php echo $mostrar['almacenamiento'] ?>" />
                            </div>
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
            </form>
        </div>
    </div>
</div>