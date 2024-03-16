<?php

class Dashboard extends Controller{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index(){
        $data['title'] = 'Dashboard';
        $data['totalClientes'] = $this->model->totalClientes()[0];
        $data['totalReservas'] = $this->model->totalReservas()[0];
        $data['totalHabitaciones'] = $this->model->totalHabitaciones()[0];
        $this->views->getView('/admin/dashboard/index', $data);
        
    }

    public function logout(){
        session_destroy();
        redirect(RUTA_ADMIN);
    }
}

?>