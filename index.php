<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/tanko/");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/tanko/");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Home'));
});

Flight::route('/nosotros', function () {
    Flight::render('nosotros.php', array('title' => 'Nosotros'));
});

Flight::route('/servicios', function () {
    Flight::render('servicios.php', array('title' => 'Servicios'));
});

Flight::route('/segurosEmpresariales', function () {
    Flight::render('segurosEmpresariales.php', array('title' => 'Seguros Empresariales'));
});

Flight::route('/segurosPersonales', function () {
    Flight::render('segurosPersonales.php', array('title' => 'Seguros Personales'));
});

Flight::route('/fianzas', function () {
    Flight::render('fianzas.php', array('title' => 'Fianzas'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});

Flight::route('/landing', function () {
    Flight::render('landing.php', array('title' => 'Landing'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
