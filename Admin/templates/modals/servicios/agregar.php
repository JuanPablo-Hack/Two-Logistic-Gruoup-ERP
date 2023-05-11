<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM tipos_servicios";
    $result2 = $conexion->query($sql2);
    $sql4 = "SELECT * FROM trabajador WHERE rol=3";
    $result4 = mysqli_query($conexion, $sql4);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Servicio agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, revisa que todos los campos se hayan llenado por favor!</div>
                <form id="AltaServicio">
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                            <select class="form-control" name='cliente' required>
                                <option value="0" selected disabled>-Selecciona un cliente-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Ejecutivo</label>
                            <select class="form-control" name='operador' required>
                                <option value="0" selected disabled>-Selecciona un ejecutivo-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result4)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Fecha de Servicio</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="html5-date-input" name="fecha_servicio" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Tipo de servicios</label>
                            <?php
                            while ($Row1 = mysqli_fetch_array($result2)) {
                            ?>
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="checkbox" value="<?php echo $Row1['nombre']; ?>" id="defaultCheck1" name="check_lista[]" />
                                    <label class="form-check-label" for="defaultCheck1"> <?php echo $Row1['nombre']; ?> </label>
                                </div>
                            <?php
                            }
                            ?>
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