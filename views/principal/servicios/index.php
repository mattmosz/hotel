<?php include_once 'views/template/header-principal.php'; 
include_once 'views/template/portada.php'; ?>

<section class="exclusive-offers-area-four pt-100 pb-70">
</section>

<!-- Start facilities Area -->
<section class="facilities-area-four">
    <div class="container">
        <div class="section-title">
            <span>Servicios</span>
            <h2>Servicios premium para nuestros huéspedes</h2>
        </div>
        <div class="row">
            <?php foreach($data['servicios'] as $servicio): ?>
            <div class="col-lg-4 col-sm-6">
                <div class="singles-facilities">
                    <i class="<?php echo $servicio['icono_servicio'];?>"></i>
                    <h3><?php echo $servicio['titulo_servicio']; ?></h3>
                    <p><?php echo $servicio['descripcion_servicio']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End facilities Area -->

<?php include_once 'views/template/footer-principal.php';  ?>

</body>

</html>