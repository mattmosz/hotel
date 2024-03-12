<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/logo.jpg" type="image/png" />
    <!--plugins-->
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/css/app.css" rel="stylesheet">
    <link href="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/css/icons.css" rel="stylesheet">
    <title>HOTEL PARAISO | Administración</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/logo.jpg" width="180" alt="LOGO" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Iniciar Sesión</h3>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>INICIA SESIÓN CON USUARIO O CORREO</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form id="formulario-admin" name="formulario-admin" class="row g-3">
                                            <div class="col-12">
                                                <label id="lblusuario" name="lblusuario" class="form-label">Usuario o Correo</label>
                                                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario o Correo">
                                            </div>
                                            <div class="col-12">
                                                <label id="lblclave" name="lblclave" class="form-label">Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control border-end-0" id="clave" name="clave" value="" placeholder="Contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Iniciar Sesión</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/js/jquery.min.js"></script>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/plugins/metismenu/js/metisMenu.min.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin'; ?>/js/app.js"></script>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/login.js'; ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    const base_url = '<?php echo RUTA_ADMIN; ?>';
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
</body>

</html>