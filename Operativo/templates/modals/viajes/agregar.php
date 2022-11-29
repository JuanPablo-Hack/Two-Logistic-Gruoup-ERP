<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
    <?php
    include 'php/conexion.php';

    $sql2 = "SELECT id,razon_social FROM clientes";
    $result2 = mysqli_query($conexion, $sql2);


    $sql5 = "SELECT id FROM servicios";
    $result5 = mysqli_query($conexion, $sql5);
    $sql6 = "SELECT * FROM tipos_liberacion";
    $result6 = mysqli_query($conexion, $sql6);
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
                        <label for="exampleFormControlSelect1" class="form-label">Tipo de Viaje</label>
                        <select class="form-select" id="num_conceptos" aria-label="Default select example" name="no_conceptos" required onchange="cambiar_conceptos()">
                            <option selected>Selecciona un cliente</option>
                            <option value="1">Maritimos</option>
                            <option value="2">Terrestres</option>
                            <option value="3">Áereos</option>
                        </select>
                    </div>
                </div>
                <br>
                <div style="display: none;" id="concepto_1">
                    <?php include 'templates/modals/viajes/formularios/maritimos.php'; ?>
                </div>
                <div style="display: none;" id="concepto_2">
                    <?php include 'templates/modals/viajes/formularios/terrestre.php'; ?>
                </div>
                <div style="display: none;" id="concepto_3">
                    <?php include 'templates/modals/viajes/formularios/aereos.php'; ?>
                </div>
            </div>


        </div>
    </div>
</div>