<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('homePage', 'DefaultController');
Routing::get('availableFlights', 'AvailableFlightsController');
Routing::post('login', 'SecurityController');
Routing::get('help', 'DefaultController');
Routing::post('register', 'SecurityController');
Routing::get('cartFlights', 'CartController');
Routing::post('availableFlight', 'FlightController');
Routing::post('addFlight', 'AvailableFlightsController');
Routing::run($path);