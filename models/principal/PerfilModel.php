<?php

class PerfilModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }

    //INSERTAR RESERVA
    public function insertarReserva($datos){
        return $this->insertar("INSERT INTO reservas (id_usuario, id_habitacion, fecha_inicio, fecha_salida, estado_reserva, total_reserva, numero_reserva) VALUES (:id_usuario, :id_habitacion, :fecha_inicio, :fecha_salida, :estado_reserva, :total_reserva, :numero_reserva)", $datos); 
    }
    

}
?>