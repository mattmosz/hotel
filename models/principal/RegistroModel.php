<?php

class RegistroModel extends Query{
    
    public function __construct() {
       parent::__construct();
    }
    
    public function registrarse($nombre, $apellido, $usuario, $correo, $hash){
       $sql = "INSERT INTO usuarios (nombre, apellido, usuario, correo, clave) VALUES (?,?,?,?,?)";
       return $this->todos("SELECT * FROM reservas 
        WHERE fecha_inicio <= '$f_salida' 
        AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion");
    }

}

?>