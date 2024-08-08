<?php

abstract class Animal{

    public $nombre;
    public $raza;

    public function __construct($name, $raza){
        $this->nombre = $name;
        $this->raza = $raza;
    }

    abstract public  function emitirSonido();
}

class Perro extends Animal{
public function __construct($nombre, $raza){
    parent::__construct($nombre, $raza);
}
    
    public function emitirSonido(){
        echo "La mascota $this->nombre de raza $this->raza emite el sonido de Gua Gua"."\n";
    }
}

$pelusa = new Perro("lolo", "pinche");
$pelusa->emitirSonido();

class Gato extends Animal{

    public function emitirSonido(){
        echo "La mascota $this->nombre de raza $this->raza emite el sonido de Miau Miau"."\n";
    }
}

$selene = new Gato("lolo", "pinche");
$selene->emitirSonido();


class Vaca extends Animal{


    public function emitirSonido(){
        echo "La mascota $this->nombre de raza $this->raza emite el sonido de Muu Muu"."\n";
    }
}