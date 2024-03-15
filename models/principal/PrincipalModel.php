<?php

class PrincipalModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }
    //OBTENER SLIDERS
    public function getSliders(){
        return $this->todos("SELECT * FROM sliders");
    }
    //OBTENER HABITACIONES
    public function getHabitaciones(){
        return $this->todos("SELECT * FROM habitaciones WHERE estado_habitacion = 1");
    }

    //OBTENER SERVICIOS
    public function getServicios(){
        return $this->todos("SELECT * FROM servicios");
    }

}

?>