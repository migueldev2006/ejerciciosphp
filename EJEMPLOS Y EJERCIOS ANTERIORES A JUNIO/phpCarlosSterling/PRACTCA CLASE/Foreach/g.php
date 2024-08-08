<?php
$estudiantes = [
    "Hombre"=>["Luis"=> 18, "Alejandro"=> 19, "Yurgen"=> 18,],
    "Mujer"=>["Angela"=> 15, "Alejandra"=> 20, "Etefany"=> 17,],
    "Otro"=>["Lila"=> 25, "Jose"=> 18, "Marcos"=> 28,],
];

foreach($estudiantes as $genero => $persona){
    echo "el nombre de la persona es: ".$genero."\n";
    foreach($persona as $nombre => $edad){
        echo "".$nombre." con ".$edad." años de edad"."\n";
    }
}