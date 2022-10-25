<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Viaje</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Viaje agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <div class="row">
                    <div class="col mb-0">
                        <label for="exampleFormControlSelect1" class="form-label">Tipo de Registro</label>
                        <select class="form-select" id="num_conceptos" aria-label="Default select example" name="no_conceptos" required onchange="cambiar_conceptos()">
                            <option selected>Selecciona un cliente</option>
                            <option value="1">Almacenaje</option>
                            <option value="2">Traspaleo</option>
                        </select>
                    </div>
                </div>
                <br>
                <div style="display: none;" id="concepto_1">
                    <?php include 'templates/modals/bodega_externa/formularios/almacenaje.php'; ?>
                </div>
                <div style="display: none;" id="concepto_2">
                    <?php include 'templates/modals/bodega_externa/formularios/traspaleo.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>