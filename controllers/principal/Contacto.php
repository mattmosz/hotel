<?php

class Contacto extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Contacto';
        $data['subtitle'] = 'Contáctanos';
        //OBTENER CONTACTOS
        $data['contactos'] = $this->model->listarContactos();
        $this->views->getView('principal/contacto/index', $data);
        
    }
}

?>