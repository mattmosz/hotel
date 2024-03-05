<?php

class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Crea una cuenta';
        $data['subtitle'] = 'Registrarse';
        $this->views->getView('principal/registro', $data);
    }

    public function registrar(){
        print_r($_POST);
    }

}
