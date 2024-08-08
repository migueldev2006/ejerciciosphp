<?php
$valores = [
    ["Amabilidad", "Respeto", "Responsabilidad", "Empatia"],
    ["Confianza", "Honor", "Honradez", "Justicia"],
    ["Tristeza", "Alegria", "Alegria", "Alegria"],
    ["Compasión", "Generosidad", "Paciencia", "Diligencia"] // Añadir este conjunto
];

$nombres = ["Juliana", "Marcos", "Juan", "Liliana"];

$ciudad = ["New York", "Sao Paulo", "Berlin", "Bogota"];

foreach ($nombres as $index => $nombre) {
    echo "Su nombre es: " . $nombre . "\n";
    echo "Es de la ciudad de " . $ciudad[$index] . " y tiene los siguientes valores:\n";
    foreach ($valores[$index] as $valor) {
        echo "- " . $valor . "\n";
    }
    echo "\n"; // Para separar cada grupo de información con una línea en blanco
}
?>

