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
    public function actualizarReserva(){
        if(isset($_POST['numero_reserva'])){
            $datos = [
                'numero_reserva' => $_POST['numero_reserva'],
                'fecha_inicio' => $_POST['fecha_inicio'],
                'fecha_salida' => $_POST['fecha_salida'],
                'total_reserva' => $_POST['total_reserva'],
                'id_habitacion' => $_POST['id_habitacion'],
                'id_usuario' => $_POST['id_usuario'],
                'estado_reserva' => $_POST['estado_reserva']
            ];
            $reserva = $this->model->actualizarReserva($datos);
            if($reserva){
                header('location:'.RUTA_ADMIN.'reserva/listar');
            }
        }
    }

    public function eliminarReserva($numero_reserva){
        $reserva = $this->model->eliminarReserva($numero_reserva);
        if($reserva){
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
    }
    
}

?>