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

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['nombre', 'apellido', 'usuario', 'correo', 'clave', 'confirmar'])) {
                $nombre = strclean($_POST['nombre']);
                $apellido = strclean($_POST['apellido']);
                $usuario = strclean($_POST['usuario']);
                $correo = strclean($_POST['correo']);
                $clave = strclean($_POST['clave']);
                $confirmar = strclean($_POST['confirmar']);
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $rol = 2;
                
                if ($clave == $confirmar) { 
                    $data = $this->model->registrarse($nombre, $apellido, $usuario, $correo, $hash, $rol);
                    
                    if ($data > 0) {
                        $res = ['tipo' => 'success', 'msg' => 'USUARIO REGISTRADO'];
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'ERROR AL REGISTRARSE'];
                    }
                } else {
                    $res = ['tipo' => 'warning', 'msg' => 'LAS CONTRASEÑAS NO COINCIDEN'];
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'ALGUNOS CAMPOS REQUERIDOS NO SE HAN COMPLETADO CORRECTAMENTE'];
            }
        } else {
            $res = ['tipo' => 'warning', 'msg' => 'TODOS LOS CAMPOS CON * SON REQUERIDOS'];
        }
        
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();
    }
}
