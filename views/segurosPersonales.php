<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 mt-lg-5 segurosPersonales--hero p-2 p-lg-4">
        <h1 class="text--2xl text-white text1">Seguros <br /> Personales.</h1>
        <div class="text2">
            <p class="text--xl text-white">Tus sueños y alegrías:</p>
            <p class="text--2xl text-white">Protegelos.</p>
        </div>
    </section>
    <section class="mw--1440">
        <div class="grid--2cols gap--24 p-2 py-lg-5 px-lg-4">
            <div>
                <h2 class="text--xl text--bold font--jf text-capitalize">Seguro de <span class="text--medium-blue">accidentes.</span></h2>
                <p class="text--grey">
                    El seguro de accidentes proporciona cobertura financiera para los gastos relacionados con lesiones accidentales. Puede incluir gastos médicos, como estancias en el hospital, intervenciones quirúrgicas y visitas al médico, así como podría incluso cubrir pérdida de ingresos si no puede trabajar debido a su lesión.
                </p>
                <p class="text--grey">
                    El seguro de accidentes está diseñado para proporcionarte médico y hospital si sufre un accidente y necesita ayuda para cubrir los costes de su recuperación.
                </p>
                <div>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__ ?>/public/img/segurosPersonales/1.png" alt="Seguro de accidentes" class="w-100 mw--400">
            </div>
        </div>
        <div class="grid--2cols gap--24 p-2 py-lg-5 px-lg-4">
            <div class="text-center">
                <img src="<?php echo __ROOT__ ?>/public/img/segurosPersonales/2.png" alt="Seguro de hogar" class="w-100 mw--400">
            </div>
            <div>
                <h2 class="text--xl text--bold font--jf text-capitalize">Seguro de <span class="text--medium-blue">casa habitación.</span></h2>
                <p class="text--grey">
                    El seguro de hogar ofrece protección financiera para su vivienda y efectos personales. Puede cubrir cualquier tipo de daño a sus bienes siempre y cuando sea súbito e imprevisto. La cobertura de responsabilidad civil cubre los gastos legales y la indemnización correspondiente en caso de que sea afectado un tercero dentro de la propiedad y en algunos casos fuera de esta.
                </p>
                <p class="text--grey">
                    El objetivo del seguro de hogar es ayudarle económicamente si le ocurre algo a su casa o a sus pertenencias, para que pueda repararlas o sustituirlas sin una carga financiera importante.
                </p>
                <div>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--rounded btn--mediumBlue py-3 px-4 w--fit h--fit mx-auto">
                        Conoce más <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>