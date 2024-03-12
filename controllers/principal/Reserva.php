<?php

class Reserva extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function verify()
    {
        if (isset($_GET['fecha_llegada']) && isset($_GET['fecha_salida']) && isset($_GET['habitacion'])) {
            $f_llegada = strClean($_GET['fecha_llegada']);
            $f_salida = strClean($_GET['fecha_salida']);
            $habitacion = strClean($_GET['habitacion']);
            if (empty($f_llegada) || empty($f_salida) || empty($habitacion)) {
                header('Location: ' . RUTA_PRINCIPAL);
            } else {
                $reserva = $this->model->getDisponibilidad($f_llegada, $f_salida, $habitacion);
                $data['title'] = 'Reservas';
                $data['subtitle'] = 'Verificar Disponibilidad';
                $data['disponible'] = [
                    'fecha_llegada' => $f_llegada,
                    'fecha_salida' => $f_salida,
                    'habitacion' => $habitacion
                ];
                if (empty($reserva)) {
                    //Session de habitacion
                    $_SESSION['reserva'] = $data['disponible'];
                    $data['mensaje'] = 'HABITACION DISPONIBLE';
                    $data['tipo'] = 'success';
                } else {
                    $data['mensaje'] = 'HABITACION NO DISPONIBLE';
                    $data['tipo'] = 'danger';
                }
                $data['habitaciones'] = $this->model->getHabitaciones();
                $data['habitacion'] = $this->model->getHabitacion($habitacion);
                $this->views->getView('principal/reservas', $data);
            }
        }
    }

    public function listar($parametros)
    {
        $array = explode(',', $parametros);
        $f_llegada = (!empty($array[0])) ? $array[0] : null;
        $f_salida = (!empty($array[1])) ? $array[1] : null;
        $habitacion = (!empty($array[2])) ? $array[2] : null;
        $results = [];
        if ($f_llegada != null && $f_salida != null && $habitacion != null) {
            $reservas = $this->model->getReservasHabitacion($habitacion);
            for ($i = 0; $i < count($reservas); $i++) {
                $datos['id'] = $reservas[$i]['id_habitacion'];
                $datos['title'] = 'RESERVADO';
                $datos['start'] = $reservas[$i]['fecha_inicio'];
                $datos['end'] = $reservas[$i]['fecha_salida'];
                $datos['color'] = '#dc3545';
                array_push($results, $datos);
            }

            $data['id'] = $habitacion;
            $data['title'] = 'VERIFICANDO';
            $data['start'] = $f_llegada;
            $data['end'] = $f_salida;
            $data['color'] = '#ffc107';
            array_push($results, $data);
            echo json_encode($results, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function pendiente()
    {
        $data['title'] = 'Reserva Pendiente';
        $data['subtitle'] = 'Reservas';
        $data['habitacion'] = [];
        if (!empty($_SESSION['reserva'])) {
            $data['habitacion'] = $this->model->getHabitacion($_SESSION['reserva']['habitacion']);
            $_SESSION['reserva']['precio_noche'] = $data['habitacion']['precio_noche'];
        }
        $this->views->getView('principal/perfil/pendiente', $data);
    }
}
