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

    public function obtenerHabitacion(){
        if(isset($_POST['id_habitacion'])){
            $id_habitacion = $_POST['id_habitacion'];
            $habitacion = $this->model->getHabitacion($id_habitacion);
            echo json_encode($habitacion);
        }
    }

}