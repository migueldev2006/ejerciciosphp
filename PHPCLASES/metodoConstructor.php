<?php

class Deportista{
    
    //propiedades
    public string $nombre;
    public float $estatura;
    public int $edad;
    public float $peso;
    public string $deporte;

    public function __construct(){
        $this->nombre = readline("Ingresa el nombre");
        $this->estatura = readline("Ingresa la estatura");
        $this->edad = readline("Ingresa la edad");
        $this->peso = readline("Ingresa el peso");
        $this->deporte = readline("Ingresa el deporte");
    }

    //Métodos
    public function PracticarDeporte(){
        return $this->nombre." es un deportista con ".$this->estatura."de estatura."."Su edad es ".$this->edad." años, con un peso de ".$this->peso."kg, le gusta practicar el deporte de ".$this->deporte;
    }
    public function Competir(){
        return $this->nombre." es un deportista con ".$this->estatura."de estatura."."Su edad es ".$this->edad." años, con un peso de ".$this->peso."kg, le gusta practicar el deporte de ".$this->deporte." Competira en las olimpiadas de tokio 2025";
    }
    public function Entrenar(){
        return $this->nombre." es un deportista con ".$this->estatura."de estatura."."Su edad es ".$this->edad." años, con un peso de ".$this->peso."kg, le gusta practicar el deporte de ".$this->deporte.". siempre realiza su entrenamiento en las mañanas.";
    }

}

$Deporte = new Deportista();
echo $Deporte -> PracticarDeporte();

