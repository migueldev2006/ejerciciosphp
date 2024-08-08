<?php

$tabla = intval(readline("Ingrese un numero del 1 al 12: "));
$inicio = 1;
while($inicio < 12){
    $inicio++;
    $resultado = $tabla * $inicio."\n";
    echo "$tabla * $inicio = $resultado";
}
echo "LA tabla ha terinado";