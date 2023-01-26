<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Flight.php';
require_once __DIR__.'/../repository/AvailableFlightsRepository.php';

class AvailableFlightsController extends AppController
{

    private $availableFlightsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->availableFlightsRepository = new AvailableFlightsRepository();
    }

    public function availableFlights() {
        $availableFlights = $this->availableFlightsRepository->getFlights();
        $this->render('availableFlights', ['availableFlights' => $availableFlights]);
    }

    public function addFlight() {
        if (!$this->isPost()) {
            return $this->render('addFlight');
        }

        $dep_datetime = $_POST['dep_datetime'];
        $arr_datetime = $_POST['arr_datetime'];
        $dep_airport = $_POST['dep_airport'];
        $arr_airport = $_POST['arr_airport'];

        $newFlight = new Flight($dep_datetime, $arr_datetime, $dep_airport, $arr_airport);

        $this->availableFlightsRepository->addFlight($newFlight);
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/availableFlights");
    }
}