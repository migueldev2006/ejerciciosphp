<?php

function repartirCartas(){
$palos = ["Diamante", "Trebol", "Corazones", "Picas"];
$cartas = ["As", "2", "3", "4", "5", "5", "6", "7", "8", "9", "10","J", "Q", "K"];

$barajaJugador = [];
foreach($palos as $resultado){
    foreach($cartas as $numeroCarta){
        $barajaJugador[] = $numeroCarta." de ".$resultado."\n" ;
    }
}
//Mezclar mazo
shuffle($barajaJugador);

//Rrepartir en jugadores
$manoCartas = array_slice($barajaJugador, 0, 5);
return $manoCartas;
}

function mostrarCartas($manoCarta){
    echo "Las cartas que te corresponden son: "."\n";
    foreach($manoCarta as $carta){
        echo($carta);
    }
}
$reparticionCartas = repartirCartas();
mostrarCartas($reparticionCartas);

function evaluarMano($evaluacionCartas){
}