<?php include_once 'views/template/header-principal.php'; 
include_once 'views/template/portada.php'; ?>
<nav
    class="nav justify-content-center"
>
    
    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'reserva' ?>">Perfil</a>
    <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'reserva/pendiente' ?>">Reservas</a>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Bienvenido</h3>
                </div>
                <div class="card-body">
                    <form id="formPerfil" action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre_usuario'] ?>" required>
                                    <label for="nombre">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $_SESSION['usuario'] ?>" required>
                                    <label for="nombre">Correo</label>
                                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $_SESSION['correo_usuario'] ?>" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




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