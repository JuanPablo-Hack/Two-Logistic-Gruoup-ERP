<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles Viajes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            $datosServicio = tipos_producto($mostrar['tipo_producto']);
            $datosMerca = tipos_embalaje($mostrar['tipo_embalaje']);
            ?>
            <div class="modal-body">
                <form id="AltaTraspaleo">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname"
                                    min="0" name="no_contenedores" readonly
                                    value=" <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de producto</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname"
                                    min="0" name="no_contenedores" readonly
                                    value="<?php echo $datosServicio['nombre'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Peso</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso"
                                    readonly value="<?php echo $mostrar['peso'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Cubicaje</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="cubicaje" readonly value="<?php echo $mostrar['cubicaje'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Temperatura</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="temperatura" readonly value="<?php echo $mostrar['temp'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de embalaje</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname"
                                    min="0" name="no_contenedores" readonly
                                    value="<?php echo $datosMerca["nombre"] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname"
                                    min="0" name="no_contenedores" readonly
                                    value="<?php echo $mostrar['no_contenedores'] ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="descripcion"><?php echo $mostrar['descrip'] ?></textarea>
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