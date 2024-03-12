<?php

class ReservaModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function getReservas()
    {
        return $this->todos("SELECT usuarios.nombre_usuario, usuarios.apellido_usuario, reservas.numero_reserva, reservas.fecha_inicio, reservas.fecha_salida, reservas.total_reserva, habitaciones.estilo_habitacion FROM reservas INNER JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario INNER JOIN habitaciones ON reservas.id_habitacion = habitaciones.id_habitacion");
    }
}

?>