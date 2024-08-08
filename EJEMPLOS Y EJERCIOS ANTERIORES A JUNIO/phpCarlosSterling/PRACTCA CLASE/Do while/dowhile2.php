<?php
$tabla = intval(readline("ingrese un numero entre 1 y 10: "));
$numero = 1;
do{
    $numero++;
    $resultado = $tabla * $numero."\n";
    echo "$tabla * $numero = $resultado";
} while ($numero < 10);