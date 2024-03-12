<?php

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function login()
    {
        $data['title'] = 'Login';
        $data['subtitle'] = 'Inicio de Sesión';
        $this->views->getView('admin/login', $data);
    }

    public function verify(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['usuario', 'clave'])) {
                $usuario = strclean($_POST['usuario']);
                $clave = strclean($_POST['clave']);
                //Verificar acceso
                $verificar = $this->model->validarAccesoAdmin($usuario);
                if(empty($verificar)){
                    $res = ['tipo' => 'warning', 'msg' => 'EL USUARIO NO EXISTE'];
                }else{
                    if (password_verify($clave, $verificar['clave_usuario'])) {
                        //Crear sesión
                        crearSession([
                            'id_usuario' => $verificar['id_usuario'],
                            'usuario' => $verificar['usuario'],
                            'correo_usuario' => $verificar['correo_usuario'],
                            'nombre_usuario' => $verificar['nombre_usuario'] . ' ' . $verificar['apellido_usuario'],
                            'rol_usuario' => $verificar['rol_usuario']
                        ]);
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

?>