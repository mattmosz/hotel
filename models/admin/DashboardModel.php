<?php

class DashboardModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function totalClientes()
    {
        return $this->todos("SELECT COUNT(*) as total FROM usuarios WHERE rol_usuario = 2");
    }

    public function totalReservas()
    {
        return $this->todos("SELECT COUNT(*) as total FROM reservas");
    }

    public function totalHabitaciones()
    {
        return $this->todos("SELECT COUNT(*) as total FROM habitaciones");
    }
}