<?php

class Contacto extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Contacto';
        $data['subtitle'] = 'Contáctanos';
        $this->views->getView('principal/contacto/index', $data);
        
    }
}

?>