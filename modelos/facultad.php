<?php

require_once "config/Conn.php";

class Facultad{

   private $id; 
   private $nombre;

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



}