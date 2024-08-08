<?php

interface AccionesAprendiz{
    public function saludar();
    public function saludarGrupo();
}

class MunicipioAprendiz{
    public $nombre;
    public $apellido;
    public $curso;
    public $municipio;
    protected $idFicha;
    public $titulado;

    function __construct($name, $lastName, $curse, $localidad, $ficha, $titulado){
        $this->nombre = $name;
        $this->apellido = $lastName;
        $this->curso = $curse;
        $this->municipio = $localidad;
        $this->idFicha = $ficha;
        $this->titulado = $titulado;
    }
}
class SanAgustin extends MunicipioAprendiz implements AccionesAprendiz{
    public $edad;
    public function __construct($nombre, $apellido, $curso, $municipio, $idFicha, $titulado, $edad){
        parent::__construct($nombre, $apellido, $curso, $municipio, $idFicha, $titulado,);
            $this->edad = $edad;
        
    }

    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido." Tengo ".$this->edad. "anios. Estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
class Saladoblanco extends MunicipioAprendiz implements AccionesAprendiz{

    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido." estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
class Isnos extends MunicipioAprendiz implements AccionesAprendiz{
    
    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido."estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
$sanAGustin = new SanAgustin("Carlos", "Sterlin", "Python", "San Agustin", 2900562, "ADSO", 25);
$sanAGustin->saludar();
$sanAGustin->saludarGrupo();