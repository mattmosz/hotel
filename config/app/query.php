<?php

class Query extends Conexion{
    private $con, $pdo;
    public function __construct() {
        $this->con = new Conexion();
        $this->pdo = $this->con->conectar();
    }
    // OBTENER UNO
    public function uno($sql){
        $resultado=$this->pdo->prepare($sql);
        $resultado->execute();
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    // OBTENER TODOS
    public function todos($sql){
        $resultado=$this->pdo->prepare($sql);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    // INSERTAR
    public function insertar($sql, $array){
        $resultado=$this->pdo->prepare($sql);
        $data=$resultado->execute($array);
        if($data){
            $res = $this->pdo->lastInsertId();
        }else{
            $res = 0;
        }
        return $res;
    }
    // ACTUALIZAR O ELIIMNAR
    public function guardar($sql, $array){
        $resultado=$this->pdo->prepare($sql);
        $data=$resultado->execute($array);
        if($data){
            $res = 1;
        }else{
            $res = 0;
        }
        return $res;
    }
}

?>