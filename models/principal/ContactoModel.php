<?php

class ContactoModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }

    public function listarContactos(){
        return $this->todos("SELECT * FROM empresa");
    }

}