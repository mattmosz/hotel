<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="our-rooms-area-two our-rooms-area-four ptb-100"></section>

<section class="our-rooms-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Nuestras Habitaciones</span>
            <h2>Fina expresión de calidad y confort</h2>
        </div>
        <div class="row">
            <?php foreach ($data['habitaciones'] as $habitacion) {; ?>
            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo RUTA_PRINCIPAL . 'assets/img/habitaciones/' . $habitacion['foto_habitacion']; ?>" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Habitación <?php echo $habitacion['estilo_habitacion']; ?></h3>
                            <ul class="rating">
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                            </ul>
                            <span class="price">Desde <?php echo $habitacion['precio_noche']; ?>/noche</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include_once 'views/template/footer-principal.php';  ?>

</body>

</html>