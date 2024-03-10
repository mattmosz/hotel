<?php include_once 'views/template/header-principal.php'; 
include_once 'views/template/portada.php'; ?>
<nav
    class="nav justify-content-center"
>
    
    <a class="nav-link" href="#">Perfil</a>
    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'reserva/pendiente' ?>">Reservas</a>
</nav>



<?php include_once 'views/template/footer-principal.php';  ?>


<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/login.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/jquery.min.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/metismenu/js/metisMenu.min.js"></script>

<!-- <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/chartjs/js/Chart.min.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>plugins/chartjs/js/Chart.extension.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/index.js"></script> -->
<!--app JS-->
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/app.js"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const base_url = '<?php echo RUTA_PRINCIPAL; ?>'
</script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>js/custom.js"></script>

<?php include_once 'views/template/footer-principal.php';  ?>

</body>

</html>