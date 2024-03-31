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
        return $this->uno("SELECT nombre_usuario, apellido_usuario, usuario, correo_usuario, direccion_usuario, telefono_usuario FROM usuarios WHERE id_usuario = '$id_usuario'");
    }

    public function actualizarCliente($datos)
    {
        var_dump($datos);
        return $this->guardar("UPDATE usuarios SET nombre_usuario = :nombre_usuario, apellido_usuario = :apellido_usuario, usuario = :usuario, correo_usuario = :correo_usuario, direccion_usuario = :direccion_usuario, telefono_usuario = :telefono_usuario WHERE id_usuario = :id_usuario", $datos);
    }

    public function eliminarCliente($id_usuario)
    {
        return $this->guardar("DELETE FROM usuarios WHERE id_usuario = :id_usuario", ['id_usuario' => $id_usuario]);
    }
    public function insertarCliente($datos)
    {
        return $this->guardar("INSERT INTO usuarios (nombre_usuario, apellido_usuario, usuario, correo_usuario, clave_usuario, estado_usuario, rol_usuario) VALUES (:nombre_usuario, :apellido_usuario, :usuario, :correo_usuario, :clave_usuario, :estado_usuario, 2)", $datos);
    }
}
