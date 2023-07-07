<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <?php

    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="row g-4">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Folio</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" readonly
                                    value="<?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id']); ?>"
                                    id="basic-icon-default-fullname" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" name="contacto_comer" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-email">Operador</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-email" class="form-control" readonly
                                    value="<?php
                                                                                                                        $sql1 = "SELECT * FROM trabajador WHERE id='" . $mostrar['id_operador'] . "'";
                                                                                                                        $result1 = mysqli_query($conexion, $sql1);
                                                                                                                        $Row = mysqli_fetch_array($result1);
                                                                                                                        echo $Row['nombre'];
                                                                                                                        ?>" aria-label="john.doe" aria-describedby="basic-icon-default-email2"
                                    name="email_comer" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Fecha de Servicio</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone" readonly
                                    value="<?php echo $mostrar['fecha_servicio'] ?>" class="form-control phone-mask"
                                    aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                    name="tel_comer" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Cliente</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" readonly value="<?php
                                                                                        $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['id_cliente'] . "'";
                                                                                        $result1 = mysqli_query($conexion, $sql1);
                                                                                        $Row = mysqli_fetch_array($result1);
                                                                                        echo $Row['razon_social'];
                                                                                        ?>"
                                    id="basic-icon-default-fullname" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" name="razon_social" />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" readonly value="<?php echo $mostrar['id'] ?>"
                                id="exampleFormControlTextarea1" rows="3"
                                name="descripcion"><?php echo $mostrar['descripcion']; ?></textarea>
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