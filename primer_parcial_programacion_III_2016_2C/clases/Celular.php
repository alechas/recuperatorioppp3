<?php
class Celular {

//agregar atributos necesarios
    public $marca;
    public $so;
    public $cantSIM;

    public function __construct($marca, $so, $cantSIM) {
        $this->marca = $marca; 
        $this->so = $so; 
        $this->cantSIM = $cantSIM;
    }
    
    public function Agregar() {
        //$arrayCelulares[] = CargarCelulares();
    	echo "agregar!!";
    }

    public function CargarCelulares()
    {



    }
}