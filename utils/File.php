<?php
require_once "../exceptions/FileException.php";

class File {
    private $type  = array("image/jpg", "image/jpeg", "image/png", "image/gif");
    private $file;

    function __construct($nombre){
        if(!in_array($_FILES[$nombre]['type'], $this->types)){
            throw new FileException('El archivo no es una imagen');
        }
        $this->file = $_FILES[$nombre];


    }

    function saveUploadFile($ruta){
        $rutaCompleta = $ruta . $this->file["nombre"];

        while(is_fila($rutaCompleta)){
            $nombre = random_int(1, 1000) . $this->file['nombre'];
            $rutaCompleta = $ruta . $nombre;
            $this->file['nombre'] = $nombre;
        }

        $temp = $this->file['tmp_name'];
        if(!move_uploaded_file($temp, $rutaCompleta)){
            throw new FileException('El archivo no se ha subido correctamente');
        }
    }

    public function getName(){
        return $this->file['nombre'];
    }
}