<?php

require_once "config/Conn.php";

class Matricula{
    private $id;
    private $nombre;
    private $apellidos;
    private $dni;
    private $id_facultad;
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

    
    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }


    public function getDni()
    {
        return $this->dni;
    }


    public function setDni($dni)
    {
        $this->dni = $dni;
    }


    public function getId_facultad()
    {
        return $this->Id_facultad;
    }


    public function setId_facultad($id_facultad)
    {
        $this->nombre = $id_facultad;
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
