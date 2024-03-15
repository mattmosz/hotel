<?php

class Habitacion extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Habitaciones';
        $data['subtitle'] = 'Habitaciones';
        $data['habitaciones'] = $this->model->listarHabitaciones();
        $this->views->getView('principal/habitacion/index', $data);
        
    }
}

?>