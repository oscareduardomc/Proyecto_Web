<?php

class Cargo {
    private $id;
    private $nombre;
    private $descripcion;
    public function __construct($datos){
        $this->id=$datos['CodigoCargo'];
        $this->nombre=$datos['NombreCargo'];
        $this->descripcion=$datos['DescripcionCargo'];
    }
    public function id(){
        return $this->id;
    }
    public function nombre(){
        return $this->nombre;
    }
    public function descripcion(){
        return $this->descripcion;
    }
}

?>