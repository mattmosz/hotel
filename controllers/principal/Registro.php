<?php

class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
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
            if (validarCampos(['nombre', 'apellido', 'usuario', 'correo', 'clave', 'confirmar', 'chb2'])) {
                $nombre = strclean($_POST['nombre']);
                $apellido = strclean($_POST['apellido']);
                $usuario = strclean($_POST['usuario']);
                $correo = strclean($_POST['correo']);
                $clave = strclean($_POST['clave']);
                $confirmar = strclean($_POST['confirmar']);
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $rol = 2;

                if ($clave == $confirmar) {
                    //Verificar campos únicos
                    $verificarUser = $this->model->validarUnique('usuario', $usuario, 0);
                    if (empty($verificarUser)) {
                        $verificarCorreo = $this->model->validarUnique('correo_usuario', $correo, 0);
                        if (empty($verificarCorreo)) {
                            $data = $this->model->registrarse($nombre, $apellido, $usuario, $correo, $hash, $rol);

                            if ($data > 0) {
                                crearSession([
                                    'id_usuario' => $data,
                                    'usuario' => $usuario,
                                    'correo_usuario' => $correo,
                                    'nombre_usuario' => $nombre . ' ' . $apellido,
                                    'rol_usuario' => $rol
                                ]);
                                $res = ['tipo' => 'success', 'msg' => 'USUARIO REGISTRADO'];
                            } else {
                                $res = ['tipo' => 'warning', 'msg' => 'ERROR AL REGISTRARSE'];
                            }
                        } else {
                            $res = ['tipo' => 'warning', 'msg' => 'EL CORREO YA EXISTE'];
                        }
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'EL USUARIO YA EXISTE'];
                    }
                } else {
                    $res = ['tipo' => 'warning', 'msg' => 'LAS CONTRASEÑAS NO COINCIDEN'];
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'TODOS LOS CAMPOS SON OBLIGATORIOS'];
            }

            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
