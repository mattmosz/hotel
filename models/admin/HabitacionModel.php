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

    public function getHabitacion($id_habitacion)
    {
        return $this->uno("SELECT numero_habitacion, estilo_habitacion, descripcion_habitacion, precio_noche, estado_habitacion FROM habitaciones WHERE id_habitacion = '$id_habitacion'");
    }

}