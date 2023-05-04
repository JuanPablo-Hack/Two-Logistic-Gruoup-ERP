<div class="modal fade" id="EditarAgenteAduanal<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Editar Agente Aduanal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="php/tipoliberacion_controller.php">
                    <input type="hidden" name="accion" value="editar">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Nombre</label>
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" id="basic-icon-default-fullname" name="nombre" value="<?php echo $mostrar['nombre'] ?>" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>