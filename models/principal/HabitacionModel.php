<?php

class HabitacionModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }

    public function listarHabitaciones(){
        return $this->todos("SELECT * FROM habitaciones WHERE estado_habitacion = 1");
    }

}
