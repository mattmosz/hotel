<?php

class Reserva extends Controller{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function listar(){
        
        $reservas = $this->model->listarReservas();
        $data['reservas'] = $reservas;
        $data['title'] = 'Reservas';
        $this->views->getView('/admin/dashboard/reservas', $data);

    }
}

?>