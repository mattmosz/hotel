<?php

class Principal extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Principal';
        //OBTENER SLIDERS
        $data['sliders'] = $this->model->getSliders();
        //OBTENER HABITACIONES
        $data['habitaciones'] = $this->model->getHabitaciones();
        $this->views->getView('index', $data);
        
    }
}

?>