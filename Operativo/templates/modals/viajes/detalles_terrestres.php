<div class="modal fade" id="VerDetalles<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detalles Viajes Terrestres</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            $datosAgenteAduanal = agencia_aduanal($mostrar['id_agente_aduanal']);
            $datosMerca = tipo_mercancia($mostrar['id_tipo_mercancia']);
            $datosPlata = tipo_plataforma($mostrar['id_plataforma']);
            $datosTrans = transporte($mostrar['transportista']);
            ?>
            <div class="modal-body">
                <form id="AltaviajeTerrestre">
                    <input type="hidden" value="Viaje Terrestre" name="tipo_viaje">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Ref. Interna</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly
                                    value="<td> <?php echo    'OTL-' . date('Y') . '-' . folio_creacion($mostrar['id_servicio']); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Terminal</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $mostrar['terminal'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Fecha del servicio</label>
                            <div class="input-group input-group-merge">

                                <input type="date" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="fecha_servicio" readonly value="<?php echo $mostrar['fecha_servicio'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Hora</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="hora"
                                    readonly value="<?php echo $mostrar['hora'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">No. de contenedores</label>
                            <div class="input-group input-group-merge">
                                <input type="number" min="0" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="no_contenedores" readonly value="<?php echo $mostrar['no_contenedores'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Tipo de contenedores</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly
                                name="tipo_contenedor"><?php echo $mostrar['tipo_contenedores'] ?></textarea>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de Viaje</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $mostrar['tipo_viaje'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Peso</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="peso"
                                    readonly value="<?php echo $mostrar['peso'] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-fullname">Bultos</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="bultos"
                                    readonly value="<?php echo $mostrar['bultos'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Agente Aduanal</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosAgenteAduanal["nombre"] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de Mercancia</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosMerca["nombre"] ?>" />
                            </div>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de Plataforma</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosPlata["nombre"] ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Transportista</label>
                            <div class="input-group input-group-merge">

                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                    name="terminal" readonly value="<?php echo $datosTrans["nombre"] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"
                                readonly><?php echo $mostrar['comentarios_finales'] ?></textarea>
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