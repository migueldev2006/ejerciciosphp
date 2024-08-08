<?php
$numero_secreto = 25;
$intentos = 0;

while ($intentos < 3) {
    $adivinanza = readline("Adivina el número secreto (entre 1 y 100): ");
    
    if ($adivinanza == $numero_secreto) {
        echo "¡Felicidades, has adivinado el número secreto!";
        break;
    } else {
        echo "Lo siento, intenta de nuevo...\n";
        $intentos++;
    }
}

if ($intentos == 3) {
    echo "Lo siento, has excedido el número máximo de intentos.";
}