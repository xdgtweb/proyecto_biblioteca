<?php

class Colaboradores{
    var $nombre;
    var $descripcion;
    const RUTA_IMAGEN = '..\..\assets\img\colaboradores/';

    function __construct($nombre, $descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getUrlImagen(){
        return self::RUTA_IMAGEN.$this->nombre;
    }   
}
