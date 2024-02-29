<?php

class ReservaModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }
    
    public function getDisponibilidad($f_llegada, $f_salida, $habitacion){
        return $this->todos("SELECT * FROM reservas 
        WHERE fecha_inicio <= '$f_salida' 
        AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion");
    }
    public function getReservasHabitacion($habitacion){
        return $this->todos("SELECT * FROM reservas 
        WHERE id_habitacion = $habitacion");
    }
    //OBTENER HABITACIONES
    public function getHabitaciones(){
        return $this->todos("SELECT * FROM habitaciones WHERE estado = 1");
    }
     //OBTENER HABITACION
     public function getHabitacion($id_habitacion){
        return $this->todos("SELECT * FROM habitaciones WHERE id = $id_habitacion");
    }
}

?>