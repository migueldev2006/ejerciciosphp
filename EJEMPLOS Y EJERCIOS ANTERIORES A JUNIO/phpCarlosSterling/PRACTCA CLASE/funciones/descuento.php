<?php

function calcularDescuento($precioOriginal, $descuento){

    $porcentaje = $descuento / 100;
    $descuento1 = $precioOriginal * $porcentaje;
    $pagoFinal = $precioOriginal - $descuento1;

    return "El producto cuenta con un precio inicial de $precioOriginal, y cuenta con un descuento de $descuento%. Luego de aplicado el decuento el cliente debe pagar un total de $pagoFinal.";
} 
$precioOriginal = readline("¿Cual es el valor del producto?: ");
$descuento = intval(readline("¿Cual es el descuento del producto?: "));

echo calcularDescuento($precioOriginal, $descuento);