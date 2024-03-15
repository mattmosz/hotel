<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Contacto</span>
            <h2>Comunícate con nosotros</h2>
            <p><?php echo $data['contactos'][0]['mensaje_empresa']; ?></p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-envelope"></i>
                    <h3>Correo Electrónico:</h3>
                    <a href="mailto:<?php echo $data['contactos'][0]['correo_empresa']; ?>"><?php echo $data['contactos'][0]['correo_empresa']; ?></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-phone-call"></i>
                    <h3>Teléfono:</h3>
                    <a href="tel:+(123)1800-567-8990">Tel. <?php echo $data['contactos'][0]['telefono_empresa']; ?> </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-location-plus"></i>
                    <h3>Dirección:</h3>
                    <a href="#"><?php echo $data ['contactos'][0]['direccion_empresa']; ?></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="single-contact-info">
                <i class='bx bxl-whatsapp'></i>
                    <h3>Whatsapp:</h3>
                    <a href="tel:+(123)1800-567-8990">Cel. <?php echo $data ['contactos'][0]['whatsapp']; ?></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.266242463301!2d-78.85558191832793!3d-2.73720429012373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd12bac3a86463%3A0xdbad16649385eb71!2sHotel%20Paraiso!5e0!3m2!1ses-419!2sec!4v1710537199768!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map Area -->

<?php include_once 'views/template/footer-principal.php';  ?>
</body>

</html>