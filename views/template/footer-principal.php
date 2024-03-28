<!-- Start Footer Area -->
<footer class="footer-top-area pt-140 jarallax">
    <div class="container">
        <div class="footer-tops-area pb-60">
        </div>
        <div class="footer-middle-area pt-60">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <a href="<?php echo RUTA_PRINCIPAL; ?>">
                            <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/logo.jpg" width="100" alt="Image">
                        </a>
                        <p>Cuenta con un total de 50 habitaciones incluyendo 9 suites, cafetería, restaurante-bar, Salones 3, room service, salas de conferencias y banquetes, Business Center, Piscina, Parqueaderos.</p>
                        <ul class="social-icon">
                            <li>
                                <a href="https://www.facebook.com/hotelparaiso" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>Copyright @<?php echo date('Y') ?> <a href="<?php echo RUTA_PRINCIPAL; ?>">Hotel Paraíso</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="designed">
                        <p>Designed By <i class='bx bx-heart'></i> <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/shape/white-shape-bottom.png" alt="Image">
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/jquery.min.js"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/meanmenu.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/owl.carousel.min.js"></script>
<!-- Wow Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/wow.min.js"></script>
<!-- Nice Select Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/nice-select.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/magnific-popup.min.js"></script>
<!-- Mixitup JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/jquery.mixitup.min.js"></script>
<!-- Appear Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/appear.min.js"></script>
<!-- Odometer Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/odometer.min.js"></script>
<!-- Datepicker Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/bootstrap-datepicker.min.js"></script>
<!-- Ofi Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/ofi.min.js"></script>
<!-- jarallax Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/jarallax.min.js"></script>
<!-- Form Validator Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/contact-form-script.js"></script>
<!-- Ajaxchimp Min JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/ajaxchimp.min.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/fullcalendar/index.global.min.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/fullcalendar/es.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/js/all.min.js"></script>

<script>
    const base_url = '<?php echo RUTA_PRINCIPAL; ?>';
    function sweetalert(mensaje, tipo) {
        Swal.fire({
            position: "top-end",
            icon: tipo,
            title: mensaje,
            showConfirmButton: false,
            timer: 2500,
            toast: true
        });
    }
</script>
<!-- Custom JS -->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/js/custom.js"></script>