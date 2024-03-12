<?php

class Perfil extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Tu perfil';
        $data['subtitle'] = 'Reservas';
        $this->views->getView('principal/perfil/index', $data);
    }
    public function calcularTotalReserva($fecha_inicio, $fecha_salida)
    {
        $fecha1 = new DateTime($fecha_inicio);
        $fecha2 = new DateTime($fecha_salida);
        $diferencia = $fecha1->diff($fecha2);
        $noches = $diferencia->format('%a');
        $precio_noche = $_SESSION['reserva']['precio_noche'];
        $total = $noches * $precio_noche;
        return $total;
    }

    public function generarNumeroReserva()
    {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitud = 10;
        $numero_reserva = '';
        for ($i = 0; $i < $longitud; $i++) {
            $numero_reserva .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $numero_reserva;
    }

    public function guardarDatosReserva($datos_reserva)
    {
        $reserva = $this->model->insertarReserva($datos_reserva);
        if ($reserva > 0) {
            $res = ['tipo' => 'success', 'msg' => 'RESERVA REALIZADA'];
        } else {
            $res = ['tipo' => 'error', 'msg' => 'ERROR AL REALIZAR LA RESERVA'];
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
    }

    public function guardarReserva()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_usuario = $_SESSION['id_usuario'];
            $id_habitacion = $_SESSION['reserva']['habitacion'];
            $fecha_inicio = $_SESSION['reserva']['fecha_llegada'];
            $fecha_salida = $_SESSION['reserva']['fecha_salida'];
            $estado_reserva = 1;

            $total_reserva = $this->calcularTotalReserva($fecha_inicio, $fecha_salida);
            $numero_reserva = $this->generarNumeroReserva();
            $datos_reserva = [
                ':id_usuario' => $id_usuario,
                ':id_habitacion' => $id_habitacion,
                ':fecha_inicio' => $fecha_inicio,
                ':fecha_salida' => $fecha_salida,
                ':estado_reserva' => $estado_reserva,
                ':total_reserva' => $total_reserva,
                ':numero_reserva' => $numero_reserva
            ];

            return $this->guardarDatosReserva($datos_reserva);
        }
    }

}