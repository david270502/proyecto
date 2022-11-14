<?php

    class Conn{

    private $dsn = "mysql:host=localhost;dbname=final2";
    private $usuario ="root";
    private $pass = "";
  
    public function _construct()
    {
        $this->$dsn = "mysql:host=localhost;dbname=final2";
        $this->$usuario = "root";
        $this->$pass = "";
    }

    public function conectar(){
        $this->conexion = new PDO($this->dsn, $this->usuario, $this->pass);
        return $this->conexion;
    }

    public function cerrar (){
        $this->conexion = NULL;

    }
}
?>