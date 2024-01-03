<?php

class persona{
    public $nombre; //propiedades
    private $edad;
    protected $altura;
    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "hola soy".$this->nombre;
    }
    public function mostrarEdad(){
        $this->edad=28;
        return $this->edad;
    }
}

class trabajador extends persona{
    public $puesto;
    public function presentarseComoTrabajador(){
        echo"Hola soy".$this->nombre."y soy un".$this->puesto;

    }
}
$objTrabajador= new trabajador(); // instancia o creacionn de un objeto
$objTranajador->asignarNombre("Oscar"); //llamando un metodo
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarseComoTrabajador();

?>