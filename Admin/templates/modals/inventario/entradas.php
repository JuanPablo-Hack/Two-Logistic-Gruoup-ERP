<div class="modal fade" id="EntradasProductos<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM productos";
    $result = mysqli_query($conexion, $sql);

    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Entrada de Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Servicio agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, por favor!</div>
                <form action="php/producto_controller.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <input type="hidden" name="accion" value="entrada">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Ticket</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="html5-date-input" name="ticket" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Placas</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="html5-date-input" name="placas" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Peso Tara</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="html5-date-input" name="peso_tara" />
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Peso Neto</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="html5-date-input" name="peso_neto" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Servicio</button>
            </div>
            </form>
        </div>
    </div>
</div>