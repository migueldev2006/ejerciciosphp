<?php

abstract  class Servicios{

    abstract public function saludar($nombre);

    public function carta($nombre, $almuerzo){
        echo $this->saludar($nombre);
        echo "Le puedo ofrecer:  ";

        foreach ($almuerzo as $clave => $valor){
            echo $clave." ".$valor;
        }

    }
}