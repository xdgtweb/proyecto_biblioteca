<?php

class Database_exception extends Exception{

    public function __construct(){
        $this->message = 'Fallo en la conexión a la base de datos';
    }
}