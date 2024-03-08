<?php

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Login';
        $data['subtitle'] = 'Inicio de Sesión';
        $this->views->getView('principal/login', $data);
    }

    public function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['usuario', 'clave'])) {
                $usuario = strclean($_POST['usuario']);
                $clave = strclean($_POST['clave']);
                //Verificar acceso
                $verificar = $this->model->validarAcceso($usuario);
                if(empty($verificar)){
                    $res = ['tipo' => 'warning', 'msg' => 'EL USUARIO NO EXISTE'];
                }else{
                    if (password_verify($clave, $verificar['clave_usuario'])) {
                        //Crear sesión
                        $res = ['tipo' => 'success', 'msg' => 'BIENVENIDO'];
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'CONTRASEÑA INCORRECTA'];
                    }
                    
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'TODOS LOS CAMPOS SON OBLIGATORIOS ******'];
            }

            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
