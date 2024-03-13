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
    public function actualizarCliente($datos)
    {
        return $this->guardar("UPDATE usuarios SET nombre_usuario = :nombre_usuario, apellido_usuario = :apellido_usuario, usuario = :usuario, correo_usuario = :correo_usuario, estado_usuario = :estado_usuario WHERE id_usuario = :id_usuario", $datos);
    }
}