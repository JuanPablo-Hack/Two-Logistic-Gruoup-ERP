<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Comentarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            $datosMerca = tipo_mercancia($mostrar['id_tipo_mercancia']);
            $datosCarga = tipos_carga($mostrar['id_tipo_carga'])
            ?>
            <div class="modal-body">
                <form id="AltaDespacho">
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de operación</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $mostrar['tipo_despacho'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly
                                    value=" <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Proveedor</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $mostrar['id'] ?>" />
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Aduana de despacho</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="aduana"
                                    readonly value="<?php echo $mostrar['aduana'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Terminal portuaria</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $mostrar['terminal'] ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de mercancia</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosMerca["nombre"] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de Carga</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosCarga["nombre"] ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"
                                readonly> <?php echo $mostrar['comentarios'] ?></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                    Cerrar
                </button>


            </div>
            </form>
        </div>
    </div>
</div>