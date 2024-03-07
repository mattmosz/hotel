<?php

class RegistroModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }
    
    public function registrarse($nombre, $apellido, $usuario, $correo, $hash, $rol){
       $sql = "INSERT INTO usuarios (nombre_usuario, apellido_usuario, usuario, correo_usuario, clave_usuario, rol_usuario) VALUES (?,?,?,?,?,?)";
       return $this->insertar($sql, [$nombre, $apellido, $usuario, $correo, $hash, $rol]); 
    }

    public function validarUnique($item, $valor, $id_usuario){
      if($id_usuario == 0){
         $sql = "SELECT * FROM usuarios WHERE $item = '$valor'";
      }else{
         $sql = "SELECT * FROM usuarios WHERE $item = '$valor' AND id_usuario != $id_usuario";
      }
      return $this->uno($sql);
    }

}

?>