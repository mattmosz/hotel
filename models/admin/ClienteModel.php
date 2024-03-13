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

    public function getCliente($id_usuario)
    {
        return $this->uno("SELECT nombre_usuario, apellido_usuario, usuario, correo_usuario, estado_usuario FROM usuarios WHERE id_usuario = '$id_usuario'");
    }
}