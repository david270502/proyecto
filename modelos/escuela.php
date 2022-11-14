<?php

require_once "config/Conn.php";

class Escuela{
    private $id;
    private $nombre;
    private $id_facultad;

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

    
    public function getId_facultad()
    {
        return $this->Id_facultad;
    }


    public function setId_facultad($id_facultad)
    {
        $this->nombre = $id_facultad;
    }


}
