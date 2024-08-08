<?php
$contador = readline("ingrese un numero: ");

do {
    echo "numeros $contador \n";
    $contador++;
} while ($contador <= 25);

$contador = readline("ingrese un numero: ");

do {
    echo "numeros $contador \n";
    $contador--;
} while ($contador >= 2);
?>