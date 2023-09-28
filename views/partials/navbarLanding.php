<?php $title = isset($title) ? $title : 'Tanko';
?>

<header class="px-2 py-3 d-none d-lg-block nav--landing">
    <div class="mw--1440 d-flex justify-content-between ">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        <nav class="d-flex text-center align-items-center">
            <ul class="d-flex text-center align-items-center text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Home' ? 'a--dark-blue text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Nosotros' ? 'a--dark-blue text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>nosotros">Nosotros</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Beneficios' ? 'a--dark-blue text--bold' : 'a--white' ?>" href="<?php echo __ROOT__; ?>beneficios">Beneficios</a></li>
            </ul>
            <a href="<?php echo __ROOT__; ?>contacto" class="btn btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                Contacto
            </a>
        </nav>
    </div>
</header>

<header class="bg--lightBlue p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="">
        <button class="btn btn--darkBlue btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed z-10 bg--lightBlue w-100 py-4" id="mobileMenu" style="top: 0;">
    <div class="d-flex flex-column gap--24 px-4 py-8 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-20">
            <button class="btn btn-danger btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="mx-2"><a class="<?php echo $title == 'Home' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Nosotros' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Nosotros</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Beneficios' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>beneficios">Beneficios</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>contacto" class="btn btn-dark btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                Contacto
            </a>
        </div>
    </div>
</nav>