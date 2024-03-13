<?php

class HabitacionModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function getHabitaciones()
    {
        return $this->todos("SELECT * FROM habitaciones");
    }

}