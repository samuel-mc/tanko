<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/tanko/");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Home'));
});

Flight::route('/segurosPersonales', function () {
    Flight::render('segurosPersonales.php', array('title' => 'Seguros Personales'));
});

Flight::route('/fianzas', function () {
    Flight::render('fianzas.php', array('title' => 'Fianzas'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
