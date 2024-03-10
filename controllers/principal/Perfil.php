<?php

class Perfil extends Controller{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index(){
        $data['title'] = 'Tu perfil';
        $data['subtitle'] = 'Reservas';
        $this->views->getView('principal/perfil/index', $data);
        
    }
}

?>