<div class="modal fade" id="CambiarContra<?php echo $mostrar['id'] ?>" tabindex=" -1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="php/editar/cambiar_contra.php">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="row">
                        <div class="col mb-0">
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="basic-default-password12" aria-describedby="basic-default-password2" name="contra">
                                    <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
            </div>
            </form>
        </div>
    </div>
</div>