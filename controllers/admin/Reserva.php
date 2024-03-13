<?php

class Reserva extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function listar(){
        
        $reservas = $this->model->getReservas();
        $data['reservas'] = $reservas;
        $data['title'] = 'Reservas';
        $this->views->getView('/admin/dashboard/reservas', $data);

    }
}

?>