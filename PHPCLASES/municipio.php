<?php
abstract class MunicipioAprendiz{
    public $nombre;
    public $apellido;
    public $curso;
    public $municipio;
    protected $idFicha;
    public $titulado;

    function __construct(){
        $this->nombre =readline("Ingrese su nombre: ");
        $this->apellido = readline("Ingrese su apellido: ");
        $this->curso = readline("Curso: ");
        $this->municipio = readline("Municipio: ");
        $this->idFicha = readline("Ficha: ");
        $this->titulado = readline("Titulado: ");
    }

    abstract function saludar();
    abstract function saludarGrupo();
}

class SanAgustin extends MunicipioAprendiz{
    public function __construct(){
        parent::__construct();
    }

    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido." estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
class Saladoblanco extends MunicipioAprendiz{

    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido." estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
class Isnos extends MunicipioAprendiz{
    
    public function saludar(){
        echo "Hola me llamo ".$this->nombre." ".$this->apellido."\n";
    }
    public function saludarGrupo(){
        echo "Buenos dias, Mi nombre completo es ".$this->nombre." ".$this->apellido."estoy en el curso de ".$this->curso." del titulado de ".$this->titulado." con id de ficha: ".$this->idFicha.". Soy del Municipio de ".$this->municipio;
    }
}
function menu(){
    echo "USUARIO A INGRESAR"."\n";
    echo "Opcion1 San Agustin"."\n";
    echo "Opcion2 Saladoblanco"."\n";
    echo "Opcion3 Isnos"."\n";
    $opcion = readline("Opcion");

    if($opcion == 1){
        $sanAGustin = new SanAgustin();
        echo "¿Que desea hacer?:"."\n";
        echo "Opcion1 Saludar"."\n";
        echo "Opcion2 Saludar al grupo"."\n";
        $op = readline("Opcion:");
        if($op == 1){
            $sanAGustin->saludar();
        }
        elseif($op == 2){
            $sanAGustin->saludarGrupo();
        }
    }
    elseif($opcion == 2){
        $saladoblanco = new Saladoblanco();
        echo "¿Que desea hacer?:"."\n";
        echo "Opcion1 Saludar"."\n";
        echo "Opcion2 Saludar al grupo"."\n";
        $op = readline("Opcion:");
        if($op == 1){
            $saladoblanco->saludar();          
        }
        elseif($op == 2){
            $saladoblanco->saludarGrupo();           
        }
        $saladoblanco->saludar();
    }
    elseif($opcion == 3){
        $isnos = new Isnos();
        echo "¿Que desea hacer?:"."\n";
        echo "Opcion1 Saludar"."\n";
        echo "Opcion2 Saludar al grupo"."\n";
        $op = readline("Opcion:");
        if($op == 1){
            $isnos->saludar();
        }
        elseif($op == 2){
            $isnos->saludarGrupo();
        }
    }

}
menu();