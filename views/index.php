<?php include_once 'views/template/header-principal.php'; ?>

<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area">
    <div class="eorik-slider owl-carousel owl-theme">
        <?php foreach ($data['sliders'] as $slider) { ?>
            <div class="eorik-slider-item" style=" background-image: url(<?php echo RUTA_PRINCIPAL . 'assets/img/sliders/' . $slider['foto_slider'] ?>);">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
                                <h1><?php echo $slider['titulo_slider']; ?></h1>
                                <span><?php echo $slider['subtitulo_slider']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="white-shape">
        <img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/home-one/slider/white-shape.png" alt="Image">
    </div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
    <div class="container">
        <form class="check-form" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>Fecha de Llegada</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-1">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" id="fecha_llegada" name="fecha_llegada" value="<?php echo date('Y-m-d'); ?>">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>Fecha de Salida</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-2">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo date('Y-m-d'); ?>">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="check-content">
                        <div class="form-group">
                            <label for="habitacion" class="form-label">Habitaciones</label>
                            <select name="habitacion" class="select-auto" id="habitacion" style="width:100%">
                                <option value="">Seleccionar</option>
                                <?php foreach ($data['habitaciones'] as $habitacion) { ?>
                                    <option value="<?php echo $habitacion['id_habitacion']; ?>"><?php echo $habitacion['estilo_habitacion']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="check-btn check-content mb-0">
                        <button class="default-btn" type="submit">
                            Verificar Disponibilidad
                            <i class="flaticon-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Check Section -->

<!-- Start Explore Area -->
<section class="explore-area pt-170 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Descubra</span>
            <h2>Elegancia y conexión cultural</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="explore-img">
                    <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/explore.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="explore-content ml-30">
                    <h2>Estancia ideal en Azogues, a un paso de la historia</h2>
                    <p>El Hotel Paraíso está situado en el centro de crecimiento de la ciudad de Azogues a 20 minutos de la ciudad de Cuenca y tan solo a 45 minutos del mayor complejo arqueológico del país, el Castillo de Ingapirca.</p>
                    <p>Nuestras Instalaciones cuentan con habitaciones lujosamente equipadas y amobladas con tv cable Premium, piscina, baño turco e hidromasaje, discado directo, baño privado, restaurante, cafetería, Salas de Convenciones y Eventos sociales, servicio de transfer, roomservice, servicio de telefonía pública y privada, fax, internet, lavandería normal y en seco y seguridad privada</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Explore Area -->

<!-- End Incredible Area -->
<section class="incredible-area ptb-140 jarallax">
    <div class="container">
        <div class="incredible-content">
            <a href="https://www.youtube.com/watch?v=Wr233LZ6ams" class="video-btn popup-youtube">
                <i class="flaticon-play-button"></i>
            </a>
            <h2>Un recorrido visual por el hotel</h2>
            <p>Bienvenidos a un viaje visual donde el lujo y la comodidad se encuentran. Les invitamos a descubrir cada rincón de nuestro hotel, desde las habitaciones elegantemente amuebladas hasta nuestras exclusivas instalaciones de ocio. Disfruten de la experiencia y vean por qué somos la elección perfecta para su estancia en Azogues.</p>
        </div>
    </div>
    <div class="white-shape">
        <img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/shape/white-shape-top.png" alt="Image">
        <img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/shape/white-shape-bottom.png" alt="Image">
    </div>
</section>
<!-- End Incredible Area -->

<!-- Start Our Rooms Area -->
<section class="our-rooms-area pt-60 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Nuestras Habitaciones</span>
            <h2>Fina expresión de calidad y confort</h2>
        </div>
        <div class="tab industries-list-tab">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="tabs">
                    <?php foreach($data['habitaciones'] as $habitacion){ ?>
                        <li class="single-rooms">
                            <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/habitaciones/<?php echo $habitacion['foto_habitacion']; ?>" alt="Image">
                            <div class="room-content">
                                <h3><?php echo $habitacion['estilo_habitacion'] ?></h3>
                                <span>Desde <?php echo $habitacion['precio_noche'] ?>/noche</span>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab_content">
                    <?php foreach($data['habitaciones'] as $habitacion){ ?>
                        <div class="tabs_item">
                            <div class="our-rooms-single-img room-bg-1">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/habitaciones/<?php echo $habitacion['foto_habitacion']; ?>" alt="Imagen de la habitación">
                                <span class="preview-item">Vista de habitación <?php echo $habitacion['estilo_habitacion'] ?></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Rooms Area -->

<!-- Start Restaurants Area -->
<section class="restaurants-area pb-100">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span>Servicios</span>
            <h2>Servicios premium para nuestros huéspedes</h2>
        </div>
        <div class="restaurants-wrap owl-carousel owl-theme">
            <?php foreach($data['servicios'] as $servicio){ ?>
            <div class="single-restaurants bg-1">
                <i class="<?php echo $servicio['icono_servicio'] ?>"></i>
                <span><?php echo $servicio['titulo_servicio'] ?></span>
                <p><?php echo $servicio['descripcion_servicio'] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Restaurants Area -->

<?php include_once 'views/template/footer-principal.php';  

if(!empty($_GET['respuesta']) && $_GET['respuesta'== 'warning']){ ?>

<script>
    sweetalert('TODOS LOS CAMPOS SON OBLIGATORIOS', 'warning');
</script>

<?php } ?>

<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/disponibilidad.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/index.js'; ?>"></script>

</body>

</html>