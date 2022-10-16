<div class="modal fade" id="EditarUsuario<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="php/editar/editar_usuario.php">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Nombre Completo</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nombre" value="<?php echo $mostrar['nombre']; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Cargo</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="text" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="cargo" value="<?php echo $mostrar['cargo']; ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-icon-default-email2" name="email" value="<?php echo $mostrar['correo']; ?>" />
                            </div>
                            <div class="form-text">Tienes que poner un correo electrónico válido.</div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="tel" value="<?php echo $mostrar['tel']; ?>" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-default-password12">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password2" name="contra" value="<?php echo $mostrar['pwd']; ?>" />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Rol de usuario</label>
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="rol">
                                <option selected value="<?php echo $mostrar['rol']; ?>">Selecciona un rol</option>
                                <option value="1">Administrador</option>
                                <option value="2">Comercial</option>
                                <option value="3">Operador</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>