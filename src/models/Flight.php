<?php

class Flight {
    private $dep_datetime;
    private $arr_datetime;
    private $dep_airport;
    private $arr_airport;

    public function __construct(
        string $dep_datetime,
        string $arr_datetime,
        string $dep_airport,
        string $arr_airport
    ) {
        $this->dep_datetime = $dep_datetime;
        $this->arr_datetime = $arr_datetime;
        $this->dep_airport = $dep_airport;
        $this->arr_airport = $arr_airport;
    }

    public function getDepDatetime(): string
    {
        return $this->dep_datetime;
    }

    public function setDepDatetime(string $dep_datetime): void
    {
        $this->dep_datetime = $dep_datetime;
    }

    public function getArrDatetime(): string
    {
        return $this->arr_datetime;
    }

    public function setArrDatetime(string $arr_datetime): void
    {
        $this->arr_datetime = $arr_datetime;
    }

    public function getDepAirport(): string
    {
        return $this->dep_airport;
    }

    public function setDepAirport(string $dep_airport): void
    {
        $this->dep_airport = $dep_airport;
    }

    public function getArrAirport(): string
    {
        return $this->arr_airport;
    }

    public function setArrAirport(string $arr_airport): void
    {
        $this->arr_airport = $arr_airport;
    }


}