<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Flight.php';

class FlightRepository extends Repository {
    public function getFlight(): ?Flight
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM flights
        ');
        $stmt->execute();

        $flight = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($flight == false) {
            return null;
        }

        return new Flight(
            $flight['dep_datetime'],
            $flight['arr_datetime'],
            $flight['dep_airport'],
            $flight['arr_airport']
        );
    }

}