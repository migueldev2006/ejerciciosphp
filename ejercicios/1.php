<?php

function Palindromo(){
    $frase = readline("Ingrese una frase: ");
    $minusculas = strtolower($frase);
    $frase1 = str_replace(" ","",$minusculas);
    $invertir = strrev($frase1);
    
    return $frase1 == $invertir;
}

var_dump(Palindromo());