<?php

class Servicio extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function listar(){
        
        $servicios = $this->model->getServicios();
        $data['servicios'] = $servicios;
        $data['title'] = 'Servicios';
        $this->views->getView('/admin/dashboard/servicios', $data);

    }
    public function obtenerServicio(){
        if(isset($_POST['id_servicio'])){
            $id_servicio = $_POST['id_servicio'];
            $servicio = $this->model->getServicio($id_servicio);
            echo json_encode($servicio);
        }
    }
}