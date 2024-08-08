<?php

function saludo($nombre){
    return "Hola $nombre";
}

//forma 1
echo saludo($nombre = "Yurgen")."\n";

//forma 2
echo saludo("Mikel")."\n";

//forma 3
$usuario = "Joro";
echo saludo($usuario);