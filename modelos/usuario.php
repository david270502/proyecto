<?php
require_once "config/Conn.php";
class usuario
{
    private $id;
    private $username;
    private $password;
    private $tipo;
    private $id_escuela;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getId_escuela()
    {
        return $this->Id_escuela;
    }

    public function setId_escuela($id_escuela)
    {
        $this->nombre = $id_escuela;
    }
 
    public function traerUsuario()
    {
     $conexion = new Conn();
 
     try {
         $conn = $conexion->abrir();
         $sql = "SELECT * FROM usuario WHERE username=". $this->username;
         $resultados = $conn->query($sql);
         $conexion->cerrar();
     }catch (PDOException $e){
         echo "Hubo un error: ".$e->getMessage();
     }
     return $resultados;

}


}