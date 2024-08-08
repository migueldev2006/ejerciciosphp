<?php
$nombre = readline("¿Cual es el nombre del cliente: ");
$articulos = intval(readline("¿Que cantidad de articulos llevará?: "));
$valormenos10 = 20000;
$valormas10 = 15000;
$IVG = 0.18;
$descuentomas12p = 0.09;

switch ($articulos){
    case $articulos <= 10:
            $valor = $valormenos10 * $articulos;
            $ivg = $valor * $IVG;
            $total = $valor + $ivg;
        
        echo "Señor/@ $nombre, por la compra de $articulos articulos debe pagar un valor de $valor, tiene un impuesto de $ivg. Por lo tanto el valor total a pagar es de $total.";
        break;

    case $articulos > 10 and $articulos < 13:
            $valor = $valormenos10 * $articulos;
            $ivg = $valor * $IVG;
            $total = $valor + $ivg; 
        
        echo "Señor/@ $nombre, por la compra de $articulos articulos debe pagar un valor de $valor, tiene un impuesto de $ivg. Por lo tanto el valor total a pagar es de $total.";
        break;

    case $articulos > 12:
            $valor = $valormas10 * $articulos;
            $ivg = $valor * $IVG;
            $total = $valor + $ivg; 
            $descuento = $total * $descuentomas12p;
            $definitivo = $total - $descuento;
        
        echo "Señor/@ $nombre, por la compra de $articulos articulos debe pagar un valor de $valor, tiene un impuesto de $ivg. Por lo tanto el valor total a pagar es de $total. Luego aplicamos un descuento del 9% y por lo tanto el valor definitivo a pagar es de $definitivo";
        break;
}

?>