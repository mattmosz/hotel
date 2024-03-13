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

    public function obtenerReserva(){
        if(isset($_POST['numero_reserva'])){
            $numero_reserva = $_POST['numero_reserva'];
            $reserva = $this->model->getReserva($numero_reserva);
            echo json_encode($reserva);
        }
    }
    
}

?>