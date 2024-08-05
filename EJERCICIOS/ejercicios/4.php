<?php

function sumaNumeroEntero(){
    $entero = intval(readline("Ingresa un numero entero: "));
    $texto = strval($entero);
    $digitoEntero = str_split($texto);

    $suma = 0;
    for ($i = 0; $i < count($digitoEntero); $i++){
        $suma += intval($digitoEntero[$i]);
    }
    echo "La suma de los digitos es: $suma";
}
echo sumaNumeroEntero();