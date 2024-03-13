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
}