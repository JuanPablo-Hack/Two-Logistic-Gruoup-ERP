<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conexion, $sql);
    $sql2 = "SELECT * FROM proveedores";
    $result2 = mysqli_query($conexion, $sql2);
    ?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Agregar Contrato</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display:none;" id="success">Contrato agregado con éxito!</div>
                <div class="alert alert-danger" role="alert" style="display:none;" id="decline">Tuvimos un problema con la base de datos revisa tus datos, verifica que todos los campos estén llenos por favor!</div>
                <form id="AltaContratoForm">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Cliente</label>
                            <select class="form-control" name='cliente' required id="selectClient" onblur="verificarSelectCliente()">
                                <option value="0" selected>-Selecciona un cliente-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div id="defaultFormControlHelp" style="display: none;" class="form-text">Es necesario seleccionar a un cliente, de no existir ninguno, por favor de ir a crear en la sección de <a href="listar_clientes.php" target="_blank">Clientes</a>.</div>
                        </div>
                        <div class="col mb-0">
                            <label for="exampleFormControlSelect1" class="form-label">Proveedor</label>
                            <select class="form-control" name='proveedor' required id="selectProovedor" onblur="verificarSelectProovedor()">
                                <option value="0" selected>-Selecciona un proovedor-</option>
                                <?php
                                while ($Row1 = mysqli_fetch_array($result2)) {
                                ?>
                                    <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['razon_social']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div id="proveedorAviso" style="display: none;" class="form-text">Es necesario seleccionar a un proovedor, de no existir ninguno, por favor de ir a crear en la sección de <a href="listar_proveedores.php" target="_blank">Proveedores</a>.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Agregar Contrato</button>
            </div>
            </form>
        </div>
    </div>
</div>