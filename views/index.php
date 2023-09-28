<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 mt-lg-5">
        <div class="grid--2-3cols">
            <div class="bg--mediumBlue p-4 d-flex flex-column justify-content-center">
                <h2 class="text--2xl text--white font--jf text--bold">Seguros de accidentes personales.</h2>
                <p class="text--white text--md my-4">No trabajamos para las aseguradoras o afianzadoras, trabajamos para nuestros clientes.</p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                    Contacto
                </a>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/home/hero.png" class="w-100 h-100">

        </div>
    </section>
    <section class="mw--1440 position-relative px-lg-5 py-lg-2 p-2">
        <div class="px-lg-5 py-lg-3 p-3 contacto__banner">
            <div class="my-2 mr-1">
                <h5 class="text--grey">Correos de contacto: </h5>
                <a href="mailto:ayuda@tankosoluciones.com">ayuda@tankosoluciones.com</a>
            </div>
            <div class="my-2 mr-1">
                <h5 class="text--grey">Teléfono:</h5>
                <div>
                    <a href="tel:33 3616 3430">33 3616 3430</a>
                    <span>o</span>
                    <a href="tel:33 3616 3071">33 3616 3071</a>
                </div>
            </div>
            <div class="my-2 mr-1">
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--darkBlue py-3 px-4 w--fit h--fit text--bold">
                    Contactar o agendar cita
                </a>
            </div>
        </div>
        <div class="bg--lightBlue grid--2cols gap--24 mt-lg-5 p-lg-5 p-3 rounded--16 align-items-center">
            <div>
                <h2 class="text--2xl text--bold text--dark-blue font--jf">La Historia De Nuestra <span class="text--medium-blue font--jf">Pasión.</span></h2>
                <p class="text--grey text--md my-4">
                    Con más de 60 años de experiencia conjunta comprobable de los socios en el ramo de seguros, somos un despacho de consultoría y administración de riesgos que buscamos siempre ayudar a nuestros clientes en el logro de sus objetivos mediante el adecuado diseño de programas de protección de sus activos, la prevención de riesgos y/o la minimización del impacto financiero en caso de una eventualidad inesperada derivada de siniestros y/o daños.
                </p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--darkBlue py-3 px-4 w--fit h--fit text--bold">
                    Ver más acerca de nosotros
                </a>
            </div>
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/home/historia.png" class="w-100">
            </div>
        </div>
        <?php include 'components/brandsBanner.php'; ?>
    </section>
    <section class="mw--1440 p-lg-5 p-2 text-center">
        <h2 class="text--dark-blue text--bold font--jf text--xl">Nuestros <span class="text--medium-blue">Productos.</span></h2>
        <div class="grid--3cols gap--24">
            <div class="card shadow p-5 text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/sPersonales.png" class="w-100 mw--280">
                <h4 class="text--dark-blue text--bold my-3">Seguros personales.</h4>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                    Conoce el seguro <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="card shadow p-5 text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/sEmpresariales.png" class="w-100 mw--280">
                <h4 class="text--dark-blue text--bold my-3">Seguros empresariales..</h4>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                    Conoce el seguro <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="card shadow p-5 text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/fianzas.png" class="w-100 mw--280">
                <h4 class="text--dark-blue text--bold my-3">Fianzas.</h4>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                    Conoce el seguro <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="mw--1440 text-center p-2">
        <h2 class="text--dark-blue text--bold font--jf text--xl">Conoce Nuestros <span class="text--medium-blue">Servicios.</span></h2>
        <div class="bg--lightBlue rounded--16 p-lg-5 p-4 grid--3cols gap-32">
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns1.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">Corretaje de Programas de seguros y fianzas en el mercado nacional y extranjero.</p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns2.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">Corretaje de Programas de seguros y fianzas en el mercado nacional y extranjero.</p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns3.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">Auditoria de programas de seguro vigentes.</p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns4.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">Servicios de Ingeniería, tales como: Inspecciones de evaluación, cálculo de PML, manejo de control de pérdidas.</p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns5.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">
                        Capacitación a empresas en administración de riesgos y coberturas de seguros.
                    </p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="grid--2rows">
                <img src="<?php echo __ROOT__; ?>/public/img/home/ns6.png" class="w-100 mw--280 mh--140">
                <div class="d-flex flex-column justify-content-between">
                    <p class="text--sm my-3">
                        Asesoría y Gestión de siniestros.
                    </p>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mw--1440 p-lg-4 p-2">
        <div id="carouselHome" class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">01</h2>
                            <p class="text--xl">Análisis de necesidades.</p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey1.png" class="mw--400 w-100">
                        </div>
                    </li>
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">02</h2>
                            <p class="text--xl">
                                Diseño de producto.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey2.png" class="mw--400 w-100">
                        </div>
                    </li>
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">03</h2>
                            <p class="text--xl">
                                Brocking con aseguradoras.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey3.png" class="mw--400 w-100">
                        </div>
                    </li>
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">04</h2>
                            <p class="text--xl">
                                Entrega de mejores opciones a cliente.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey4.png" class="mw--400 w-100">
                        </div>
                    </li>
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">05</h2>
                            <p class="text--xl">
                                Capacitación de cliente.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey5.png" class="mw--400 w-100">
                        </div>
                    </li>
                    <li class="splide__slide grid--2cols align-items-center gap--24 p-2 p-lg-4 bg-white">
                        <div>
                            <h2 class="text--uxl text--light-blue text--bold">06</h2>
                            <p class="text--xl">
                                Servicio post venta.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/journey6.png" class="mw--400 w-100">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev m-2">
                    <i class="fa-solid fa-arrow-left fa-2xl"></i>
                </button>
                <button class="splide__arrow splide__arrow--next m-2">
                    <i class="fa-solid fa-arrow-right fa-2xl"></i>
                </button>
            </div>
        </div>
    </section>
    <?php include 'components/contactoEsFacil.php'; ?>
    <?php include 'components/estamosParaAyudar.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>