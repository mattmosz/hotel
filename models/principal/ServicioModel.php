<?php

class ServicioModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }

    public function listarServicios(){
        return $this->todos("SELECT * FROM servicios");
    }
}