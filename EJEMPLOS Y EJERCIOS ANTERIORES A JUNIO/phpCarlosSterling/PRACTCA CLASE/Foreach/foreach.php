?php
$valores=[
    
        ["Amabilidad", "Respeto", "Responsabilidad", "Empatia"],
    
    
        ["Confianza", "Honor", "Honradez", "Justicia"],
    
    
        ["Tristeza", "Alegria", "Alegria", "Alegria"]
    
];

    $nombres = ["Juliana", "Marcos", "Juan", "Liliana"];

    $ciudad = ["New York", "Sao Paulo", "Berlin", "Bogota"];



foreach($nombres as $valor => $clave){
    echo $clave."\n";
    foreach($valores[$valor] as $city => $valoresd){
        echo $valoresd." ".$ciudad[$city]."\n";
    }
}