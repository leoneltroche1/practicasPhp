<?php

class persona{
    public $nombre; //propiedades
    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
}

$objAlumno= new persona(); // instancia o creacionn de un objeto
$objAlumno->asignarNombre("Oscar"); //llamando un metodo

echo $objAlumno->nombre; //imprimir una propiedad



?>