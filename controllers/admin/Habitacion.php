<?php

class Habitacion extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function listar(){
        
        $habitaciones = $this->model->getHabitaciones();
        $data['habitaciones'] = $habitaciones;
        $data['title'] = 'Habitaciones';
        $this->views->getView('/admin/dashboard/habitaciones', $data);

    }

}