<?php

require_once "config/Conn.php";

class Cursos{
    private $id;
    private $nombre;
    private $id_escuela;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
    public function getId_escuela()
    {
        return $this->Id_escuela;
    }

    public function setId_escuela($id_escuela)
    {
        $this->nombre = $id_escuela;
    }

}
