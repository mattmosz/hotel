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

    public function actualizarHabitacion(){
        if(isset($_POST['id_habitacion'])){
            $datos = [
                'id_habitacion' => $_POST['id_habitacion'],
                'numero_habitacion' => $_POST['numero_habitacion'],
                'estilo_habitacion' => $_POST['estilo_habitacion'],
                'descripcion_habitacion' => $_POST['descripcion_habitacion'],
                'precio_noche' => $_POST['precio_noche'],
                'estado_habitacion' => $_POST['estado_habitacion']
            ];
            $habitacion = $this->model->actualizarHabitacion($datos);
            if($habitacion){
                header('location:'.RUTA_ADMIN.'habitacion/listar');
            }
        }
    }

    public function eliminarHabitacion($id_habitacion){
        $habitacion = $this->model->eliminarHabitacion($id_habitacion);
        if($habitacion){
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
    }

}