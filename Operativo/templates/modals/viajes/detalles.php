<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles Viajes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="AltaviajeMaritimo">
                    <input type="hidden" value="Viaje Marítimo" name="tipo_viaje">
                    <div class="row">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Ref. Interna</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="booking" readonly value="<?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">No. Booking</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="booking" readonly value="<?php echo $mostrar['booking'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Línea naviera</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="linea_naviera" readonly value="<?php echo $mostrar['naviera'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="no_contenedores" readonly value="<?php echo $mostrar['no_contenedores'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Tipo de contenedores</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" readonly rows="3" name="tipo_contenedor"><?php echo $mostrar['tipo_contenedores'] ?></textarea>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Buque</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="buque" readonly value="<?php echo $mostrar['buque'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Viaje</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="viaje" readonly value="<?php echo $mostrar['viaje'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Peso</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso" readonly value="<?php echo $mostrar['peso'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Bultos</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="bultos" readonly value="<?php echo $mostrar['bultos'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Puerto de Carga</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_carga" readonly value="<?php echo $mostrar['puerto_carga'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Puerto de Transbordo</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_transbordo" readonly value="<?php echo $mostrar['puerto_transbordo'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Puerto de Destino</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_destino" readonly value="<?php echo $mostrar['puerto_destino'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Puerto de Tránsito</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="puerto_transito" readonly value="<?php echo $mostrar['puerto_transito'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Tiempo de Tránsito</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="tiempo_transito" readonly value="<?php echo $mostrar['tiempo_transito'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Cierre Documental</label>
                            <div class="input-group input-group-merge">

                                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="cierre" readonly value="<?php echo $mostrar['cierre_documental'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">VGM</label>
                            <div class="input-group input-group-merge">

                                <input type="date" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="vgm" readonly value="<?php echo $mostrar['vgm'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" readonly rows="3" name="descripcion"><?php echo $mostrar['comentarios_finales'] ?></textarea>
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