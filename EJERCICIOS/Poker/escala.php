<?php

function escala(){
    //Se le pide al usuario ingresar los metros de las paredes
    $base = readline("Ingrese la base de la pared: ");
    $altura = readline("Ingrese la altura de la pared: ");
    if($base and $altura <= 100 and $base and $altura > 0){
    //Pasmos de metros a centimetros
    $primeraMedida = $base * 100;
    $segundaMedida = $altura * 100;
    //Debemos reducir a la mitad cada uno
    $reduccion = $primeraMedida/2;
    $reduccion2 = $segundaMedida/2;
    echo "La pared queda con una medida de $reduccion centimetros de base y con $reduccion2 centimetros de altura, a escala 1:2.";
    }
    else{
        echo "Los valores ingresados son invalidos.";
    }
}