<?php

class LoginModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }

    public function validarAcceso($usuario){
         $sql = "SELECT * FROM usuarios WHERE estado_usuario = 1 AND (usuario = '$usuario' OR correo_usuario ='$usuario')";
      return $this->uno($sql);
    }

}

?>