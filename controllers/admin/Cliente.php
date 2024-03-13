<?php

class Cliente extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function listar(){
        
        $clientes = $this->model->listarClientes();
        $data['clientes'] = $clientes;
        $data['title'] = 'Clientes';
        $this->views->getView('/admin/dashboard/clientes', $data);

    }

    public function obtenerCliente(){
        if(isset($_POST['id_usuario'])){
            $id_usuario = $_POST['id_usuario'];
            $cliente = $this->model->getCliente($id_usuario);
            if ($cliente) {
                echo json_encode($cliente);
            } else {
                echo json_encode(['error' => 'No se encontró ningún cliente con el id proporcionado']);
            }
        }
    }

    public function actualizarCliente(){
        if(isset($_POST['id_usuario'])){
            $datos = [
                'id_usuario' => $_POST['id_usuario'],
                'nombre_usuario' => $_POST['nombre_usuario'],
                'apellido_usuario' => $_POST['apellido_usuario'],
                'usuario' => $_POST['usuario'],
                'correo_usuario' => $_POST['correo_usuario'],
                'estado_usuario' => $_POST['estado_usuario']
            ];
            $cliente = $this->model->actualizarCliente($datos);
            if($cliente){
                header('location:'.RUTA_ADMIN.'cliente/listar');
            }
        }
    }

    public function eliminarCliente($id_usuario){
        $cliente = $this->model->eliminarCliente($id_usuario);
        if($cliente){
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
    }
    
}