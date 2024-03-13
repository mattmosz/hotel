<?php

class ReservaModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function getReserva($numero_reserva)
    {
        return $this->uno("SELECT * FROM reservas WHERE numero_reserva = '$numero_reserva'");
    }

    public function getReservas()
    {
        return $this->todos("SELECT usuarios.nombre_usuario, usuarios.apellido_usuario, reservas.numero_reserva, reservas.fecha_inicio, reservas.fecha_salida, reservas.total_reserva, habitaciones.estilo_habitacion FROM reservas INNER JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario INNER JOIN habitaciones ON reservas.id_habitacion = habitaciones.id_habitacion");
    }
    public function actualizarReserva($datos)
    {
        return $this->guardar("UPDATE reservas SET fecha_inicio = :fecha_inicio, fecha_salida = :fecha_salida, total_reserva = :total_reserva, id_habitacion = :id_habitacion, id_cliente = :id_cliente WHERE numero_reserva = :numero_reserva", $datos);
    }
}

?>