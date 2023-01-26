<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Flight.php';

class CartRepository extends Repository
{
    public function getCartFlights(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM cart
        ');

        $stmt->execute();

        $cartFlights = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($cartFlights as $cartFlight) {
            $result[] = new Flight(
                $cartFlight['dep_datetime'],
                $cartFlight['arr_datetime'],
                $cartFlight['dep_airport'],
                $cartFlight['arr_airport']
            );
        }

        return $result;
    }

}