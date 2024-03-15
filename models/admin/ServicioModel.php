<?php

class ServicioModel extends Query
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function getServicios()
    {
        return $this->todos("SELECT * FROM servicios");
    }
    public function getServicio($id_servicio)
    {
        return $this->uno("SELECT titulo_servicio, descripcion_servicio FROM servicios WHERE id_servicio = '$id_servicio'");
    }
    public function actualizarServicio($datos)
    {
        return $this->guardar("UPDATE servicios SET titulo_servicio = :titulo_servicio, descripcion_servicio = :descripcion_servicio WHERE id_servicio = :id_servicio", $datos);
    }
    public function eliminarServicio($id_servicio)
    {
        return $this->guardar("DELETE FROM servicios WHERE id_servicio = :id_servicio", ['id_servicio' => $id_servicio]);
    }
}