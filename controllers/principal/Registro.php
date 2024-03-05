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

    public function crear(){
        $nombre = strclean($_POST['nombre']);
        $apellido = strclean($_POST['apellido']);
        $usuario = strclean($_POST['usuario']);
        $correo = strclean($_POST['correo']);
        $clave = strclean($_POST['clave']);
        $confirmar = strclean($_POST['confirmar']);
        $hash = password_hash($clave, PASSWORD_DEFAULT);
        $rol = 2;
        $this->model->crear($nombre, $apellido, $usuario, $correo, $hash, $rol);

    }

}
