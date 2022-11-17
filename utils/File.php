<?php
require_once "../exceptions/FileException.php";

class File {
    var $archivo;
    var $tipo;
    var $nombre;
    var $nombreTMP;

    function __construct($archivo, $tipo, $nombre, $nombreTMP){
        $this->archivo = $archivo;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->nombreTMP = $nombreTMP;
    }

    function saveUploadFile($rutadestino){
                $archivo = $_FILES['archivo'];
                $tipo = $archivo['type'];
                $nombre = $archivo['name'];
                $nombreTMP = $archivo['tmp_name'];

                try{
                    if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
                        if(!is_dir("..\..\assets\img\colaboradores/")){
                            mkdir("..\..\assets\img\colaboradores/"); 
                        }
                    }else{
                        throw new FileException('Los archivos no son del tipo jpg, jpeg, png o gif.');
                    }

                    if(!move_uploaded_file($nombreTMP, '..\..\assets\img\colaboradores/' . $nombre)){
                        throw new FileException('No ha podido subirse el archivo.');
                    }
                }catch (FileException $ex) { }

                }
            
    }
