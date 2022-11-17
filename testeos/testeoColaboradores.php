<?php

function ejemplo(){
    $colaborador1 = new Colaboradores("cola1", "logo colaborador 1");
    $colaborador2 = new Colaboradores("cola2", "logo colaborador 2");
    $colaborador3 = new Colaboradores("cola3", "logo colaborador 3");

    $colaboradores = [];
    array_push($colaboradores, $colaborador1, $colaborador2, $colaborador3);
    shuffle($colaboradores);
    foreach ($colaboradores as $value) {
        $ruta = $value->getUrlImagen();
        echo "<img src='$ruta.png'>";
    }
}

ejemplo();