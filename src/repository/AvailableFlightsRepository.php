<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Flight.php';

class AvailableFlightsRepository extends Repository
{
    public function getFlights(): array
    {

        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM flights
        ');

        $stmt->execute();

        $availableFlights = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($availableFlights as $availableFlight) {
            $result[] = new Flight(
                $availableFlight['dep_datetime'],
                $availableFlight['arr_datetime'],
                $availableFlight['dep_airport'],
                $availableFlight['arr_airport']
            );
        }

        return $result;
    }

    public function addFlight(Flight $flight): void {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO cart (dep_datetime, arr_datetime, dep_airport, arr_airport)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $flight->getDepDatetime(),
            $flight->getArrDatetime(),
            $flight->getDepAirport(),
            $flight->getArrAirport()
        ]);

    }
}