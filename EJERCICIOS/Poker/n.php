<?php

// Genera una baraja completa
function repartirCartas() {
    $palos = ["Diamante", "Trebol", "Corazones", "Picas"];
    $cartas = ["As", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

    $barajaJugador = [];
    foreach ($palos as $palo) {
        foreach ($cartas as $numeroCarta) {
            $barajaJugador[] = $numeroCarta . " de " . $palo;
        }
    }
    
    // Mezclar mazo
    shuffle($barajaJugador);

    // Repartir en jugadores
    $manoCartas = array_slice($barajaJugador, 0, 5);
    return $manoCartas;
}

// Muestra las cartas de la mano
function mostrarCartas($manoCarta) {
    echo "Las cartas que te corresponden son:\n";
    foreach ($manoCarta as $carta) {
        echo $carta . "\n";
    }
}

// Evalúa la mano y retorna una descripción de su valor
function evaluarMano($manoCarta) {
    $valores = [];
    foreach ($manoCarta as $carta) {
        $partes = explode(' ', $carta);
        $valor = $partes[0];
        $valores[] = $valor;
    }

    $valorConteo = array_count_values($valores);
    arsort($valorConteo);

    if (count($valorConteo) === 5) {
        return "Sin combinaciones fuertes";
    }

    $mayorConteo = max($valorConteo);
    switch ($mayorConteo) {
        case 4:
            return "Póker";
        case 3:
            if (in_array(2, $valorConteo)) {
                return "Full House";
            }
            return "Trío";
        case 2:
            $pares = array_filter($valorConteo, function ($v) {
                return $v === 2;
            });
            if (count($pares) === 2) {
                return "Doble par";
            }
            return "Par";
    }

    return "Sin combinaciones fuertes";
}

$reparticionCartas = repartirCartas();
mostrarCartas($reparticionCartas);
echo evaluarMano($reparticionCartas) . "\n";

?>
