<?php include_once 'views/template/header-cliente.php'; ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reservas</h4>
        <?php if (!empty($_SESSION['reserva'])) { ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong>¡Atención!</strong> Tienes una reserva pendiente
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                <img src="<?php echo RUTA_PRINCIPAL . 'assets/img/habitaciones/'. $data['habitacion']['foto_habitacion'] ?>" class="img-fluid rounded-top" alt="" style="width: 50%; height: auto;" />

                    <!-- Hover added -->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Habitación:</strong>
                            <?php echo $data['habitacion']['estilo_habitacion'] ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Fecha llegada:</strong>
                            <?php echo fechaPerzo($_SESSION['reserva']['fecha_llegada']); ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Fecha salida:</strong>
                            <?php echo fechaPerzo($_SESSION['reserva']['fecha_salida']); ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Precio/Noche:</strong>
                            <?php echo $data['habitacion']['precio_noche'] ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Capacidad:</strong>
                            <?php echo $data['habitacion']['capacidad_habitacion'] ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Núm. Habitación:</strong>
                            <?php echo $data['habitacion']['numero_habitacion'] ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Descripción:</strong>
                            <?php echo $data['habitacion']['descripcion_habitacion'] ?>
                        </a>
                    </div>

                </div>
                <div class="col-md-6"></div>
            </div>

        <?php } else { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong>No</strong> tienes reservas pendientes
            </div>
        <?php } ?>
    </div>
</div>



<?php include_once 'views/template/footer-cliente.php';  ?>
</body>

</html>