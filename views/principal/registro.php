<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>


<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Crear nueva cuenta</h3>
                    </div>
                    <form id="formulario" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="apellido" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="usuario" placeholder="usuario">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="correo" placeholder="Correo Electronico">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb2">
                                    <label for="chb2">
                                        I agree with Haipe's
                                        <a href="#">Términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Crear cuenta
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    ¿Ya tienes una cuenta?
                                    <a href="<?php echo RUTA_PRINCIPAL . 'login';  ?>"> Inicia Sesión</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once 'views/template/footer-principal.php';  ?>


<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/registro.js'; ?>"></script>

</body>

</html>