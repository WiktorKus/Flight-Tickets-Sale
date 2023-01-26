<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Flight.php';
require_once __DIR__.'/../repository/FlightRepository.php';

class FlightController extends AppController {
    private $flightRepository;

    public function __construct()
    {
        parent::__construct();
        $this->flightRepository = new FlightRepository();
    }

    public function availableFlight() {
        if (!$this->isPost()) {
            return $this->render('availableFlight');
        }

        $dep_datetime = $_POST['dep_datetime'];
        $arr_datetime = $_POST['arr_datetime'];
        $dep_airport = $_POST['dep_airport'];
        $arr_airport = $_POST['arr_airport'];


        $flight = $this->flightRepository->getFlight($dep_datetime, $arr_datetime, $dep_airport, $arr_airport);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/availableFlights");
    }
}