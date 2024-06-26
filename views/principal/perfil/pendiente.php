<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<link rel="icon" href="<?php echo RUTA_PRINCIPAL . 'assets/'; ?>img/logo.jpg" type="image/png" />
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<!-- loader-->
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/pace.min.css" rel="stylesheet" />
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/pace.min.js"></script>
<!-- Bootstrap CSS -->
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/bootstrap-extended.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/app.css" rel="stylesheet">
<link href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/icons.css" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/dark-theme.css" />
<link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/semi-dark.css" />
<link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/header-colors.css" />
<nav class="nav justify-content-center">

    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'perfil' ?>">Perfil</a>
    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'reserva/pendiente' ?>">Reservas</a>
    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'logout' ?>">Cerrar Sesión</a>
</nav>

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
                    <img src="<?php echo RUTA_PRINCIPAL . 'assets/img/habitaciones/' . $data['habitacion']['foto_habitacion'] ?>" class="img-fluid rounded-top" alt="" style="width: 50%; height: auto;" />

                    <!-- Hover added -->
                    <form id="reserva-form">
                        <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                                <strong>Cliente:</strong>
                                <?php echo $_SESSION['nombre_usuario']; ?>
                            </a>
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
                <div class="col-md-6">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <strong>Total:</strong>
                            <?php
                            $fechaLlegada = $_SESSION['reserva']['fecha_llegada'];
                            $fechaSalida = $_SESSION['reserva']['fecha_salida'];
                            $precioNoche = $data['habitacion']['precio_noche'];

                            $diferenciaFechas = strtotime($fechaSalida) - strtotime($fechaLlegada);
                            $noches = floor($diferenciaFechas / (60 * 60 * 24));

                            $total = $precioNoche * $noches;
                            echo number_format($total, 2);
                            ?>
                        </a>
                    </div>
                    <button class="btn btn-primary mt-3" id="confirmar-reserva" type="submit" name="confirmar-reserva">Confirmar Reserva</button>
                    <button class="btn btn-secondary mt-3" id="imprimir-nota" type="button">Imprimir Nota de Venta</button>
                </div>
                </form>
            </div>

        <?php } else { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong>No</strong> tienes reservas pendientes
            </div>
        <?php } ?>
    </div>
</div>

<?php include_once 'views/template/footer-principal.php';  ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/perfil.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/notaVenta.js'; ?>"></script>

</body>

</html>