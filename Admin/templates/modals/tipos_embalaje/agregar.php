<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Tipo de Embalaje</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Tipo de Embalaje agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <form id="AltaTipoEmbalaje">
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Nombre</label>
                        <div class="input-group input-group-merge">

                            <input type="text" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nombre" required />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Tipo de Embalaje</button>
            </div>
            </form>
        </div>
    </div>
</div>