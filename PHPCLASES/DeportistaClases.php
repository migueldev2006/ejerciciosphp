<?php

class Deportista{
    
    //propiedades
    public string $nombre;
    public float $estatura;
    public int $edad;
    public float $peso;
    public string $deporte;

    //Métodos
    public function PracticarDeporte(){
        return $this->nombre." es un deportista con ".$this->estatura." de estatura. "." Su edad es ".$this->edad." años, con un peso de ".$this->peso." kg, le gusta practicar el deporte de ".$this->deporte;
    }
    public function Competir(){
        return $this->nombre." es un deportista con ".$this->estatura." de estatura."." Su edad es ".$this->edad." años, con un peso de ".$this->peso." kg, le gusta practicar el deporte de ".$this->deporte." Competira en las olimpiadas de tokio 2025";
    }
    public function Entrenar(){
        return $this->nombre." es un deportista con ".$this->estatura." de estatura."." Su edad es ".$this->edad." años, con un peso de ".$this->peso." kg, le gusta practicar el deporte de ".$this->deporte." siempre realiza su entrenamiento en las mañanas.";
    }

}

$Deporte = new Deportista();
$Deporte -> nombre = readline("Ingrese el nombre del deportista: ");
$Deporte -> edad = readline("Ingrease la edad del deportista: ");
$Deporte -> estatura = readline("Ingrese la estatura del deportista: ");
$Deporte -> peso = readline("Ingrese el peso del deportista: ");
$Deporte -> deporte = readline("Ingrese el nombre del deporte que practica: ");
echo $Deporte -> PracticarDeporte();

// Este es el metodo sencillo de realizar la definición y llamado de clases. Para el llamado lo que debemos tener en cuenta es el declarar una nueva variable para añadir informacion y ejecutar la clase.



