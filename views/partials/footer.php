<footer class="bg--lightBlue py-5 px-3">
    <div class="mw--1440 footer">
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-2 px-4 w--fit h--fit text--bold">
                Contáctanos
            </a>
            <div class="my-5">
                <a href="mailto:ayuda@tankosoluciones.com" class="a--dark-blue text--lg">ayuda@tankosoluciones.com</a>
            </div>
            <div>
                <h5 class="text--grey mb-3">Nuestras redes sociales</h5>
                <ul class="d-flex list--unstyled">
                    <li class="mr-3"><a target="_blank" href="" class="fa-brands fa-instagram fa-2xl text--dark-blue"></i></a></li>
                    <li class="mr-3"><a target="_blank" href=""><i class="fa-brands fa-linkedin fa-2xl text--dark-blue"></i></a></li>
                    <li class="mr-3"><a target="_blank" href=""><i class="fa-brands fa-square-facebook fa-2xl text--dark-blue"></i></i></a></li>
                </ul>
            </div>
        </div>
        <div class="grid--3cols ">
            <div>
                <h4 class="text--dark-blue text--bold text--sm mb-4">Home</h4>
                <ul class="list--unstyled">
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>nosotros">Nosotros</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>">Client journey</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text--dark-blue text--bold text--sm mb-4">Nosotros</h4>
                <ul class="list--unstyled">
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>">Nuestra pasión</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>">¿Qué nos mueve?</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>">¿Qué buscamos?</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text--dark-blue text--bold text--sm mb-4">Seguros</h4>
                <ul class="list--unstyled">
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>segurosPersonales">Personal</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>segurosEmpresariales">Empresarial</a></li>
                    <li class="my-2"><a class="text--sm a--dark-blue" href="<?php echo __ROOT__; ?>">Fianzas</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="<?php echo __ROOT__; ?>/public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="<?php echo __ROOT__; ?>/public/js/carousel/dist/js/splide.min.js"></script>
<script>
    const carouselHome = new Splide('#carouselHome', {
        // autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        focus: 'center',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        breakpoints: {
            1024: {
                perPage: 1,
                gap: '1rem',
            },
            480: {
                perPage: 1,
                gap: '1rem',
            },
        },
        autoScroll: {
            speed: 2,
        },
    });

    carouselHome?.mount();
</script>
</html>