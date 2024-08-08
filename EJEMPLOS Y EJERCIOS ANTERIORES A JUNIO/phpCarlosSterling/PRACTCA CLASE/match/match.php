<?php
$vehiculo = readline("Ingrese el vehiculo que maneja (bicicleta, carro, moto o camion): ");

$solucion = match ($vehiculo){
    'bicicleta'=> 'Debe pagar un total de 100 soles.',

    $recorrido = readline("¿Cuantos kiolmetros ha recorrido: "),
    $totalpagar1 = $recorrido * 30,

    'moto' => 'Por el importe de la moto debe pagar un total de '.$totalpagar1.' soles.',

    'carro'=> 'Por el importe del automovil debe pagar un total de '.$totalpagar1.' soles.',

    $toneladas = readline("¿Cuántas toneladas tiene?: "),
    $camion = ($recorrido * 30)+($toneladas * 25),

    'camion'=> 'Debe pagar un total de '.$camion.' soles.',


    default => 'No posee ningun carro.'
    
};
echo $solucion;