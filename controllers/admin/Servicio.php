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
    public function eliminarServicio(){
        if(isset($_POST['id_servicio'])){
            $id_servicio = $_POST['id_servicio'];
            $servicio = $this->model->eliminarServicio($id_servicio);
            if ($servicio) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        }
    }
    
    
    public function actualizarServicio(){
        if(isset($_POST['id_servicio'])){
            $datos = [
                'id_servicio' => $_POST['id_servicio'],
                'titulo_servicio' => $_POST['titulo_servicio'],
                'descripcion_servicio' => $_POST['descripcion_servicio']
            ];
            $servicio = $this->model->actualizarServicio($datos);
            if($servicio){
                header('location:'.RUTA_ADMIN.'servicio/listar');
            }
        }
    }
    public function insertarServicio(){
        if(isset($_POST['titulo_servicio'])){
            $datos = [
                'titulo_servicio' => $_POST['titulo_servicio'],
                'descripcion_servicio' => $_POST['descripcion_servicio']
            ];
            $servicio = $this->model->insertarServicio($datos);
            if($servicio){
                header('location:'.RUTA_ADMIN.'servicio/listar');
            }
        }
    }
 
}