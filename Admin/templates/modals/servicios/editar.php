<div class="modal fade" id="EditarServicio<?php echo $mostrar['id'] ?>" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM catalogo_servicios";
    $result2 = $conexion->query($sql2);
    $sql4 = "SELECT * FROM trabajador WHERE rol=3";
    $result4 = mysqli_query($conexion, $sql4);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Editar Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="php/servicios_controller.php">
                    <input type="hidden" name="accion" value="editar">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="row g-3">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                            <select class="form-control" name='cliente'>
                                <option value="<?php echo $mostrar['id']; ?>" selected>Sin Asignar</option>
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
                            <label for="exampleFormControlSelect1" class="form-label">Operador</label>
                            <select class="form-control" name='operador'>
                                <option value="<?php echo $mostrar['id']; ?>" selected>Sin Asignar</option>
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
                                <input class="form-control" type="date" id="html5-date-input" name="fecha_servicio" value="<?php echo $mostrar['fecha_servicio']; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php echo $mostrar['descripcion']; ?></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Editar Servicio</button>
            </div>
            </form>
        </div>
    </div>
</div>