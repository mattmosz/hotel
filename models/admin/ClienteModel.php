<?php

class ClienteModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function listarClientes()
    {
        return $this->todos("SELECT * FROM usuarios WHERE rol_usuario = 2");
    }
}