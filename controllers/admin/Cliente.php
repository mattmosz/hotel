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
    
}