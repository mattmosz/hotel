<?php

class RegistroModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }
    
    public function getDisponibilidad($f_llegada, $f_salida, $habitacion){
        return $this->todos("SELECT * FROM reservas 
        WHERE fecha_inicio <= '$f_salida' 
        AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion");
    }

}

?>