<?php 

function serieFibonacci(){
$numero = intval(readline("Ingrese un numero: "));
$valor1 = 0;
$valor2 = 1;

echo $valor1 ."\n";

for ($i=0; $i < $numero; $i++) { 
    
    $valortemporal = $valor1;
    $valor1 = $valor2;
    $valor2 = $valortemporal + $valor1;
    echo $valor1 ."\n";
}
}
echo serieFibonacci();