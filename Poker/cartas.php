<?php

$cartas = ["Diamante", "Trebol", "Corazones", "Picas"];
$valor = ["As", "2", "3", "4", "5", "5", "6", "7", "8", "9", "10","J", "Q", "K"];

$barajaJugador = [];
foreach($cartas as $resultado){
    foreach($valor as $numeroCarta){
        $barajaJugador[] = $numeroCarta." de ".$resultado."\n" ;
    }
}
shuffle($barajaJugador);

$manoCartas = array_slice($barajaJugador, 0, 8);
echo "Las cartas que te corresponden son: "."\n".implode($manoCartas);