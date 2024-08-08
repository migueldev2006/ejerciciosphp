<?php

$cantidad = intval(readline("¿Cuantos productos va a llevar?"));
$IVG = 0.18;  
$descuento = 0.09;  

$total_a_pagar = match (true) {
    $cantidad <= 10 => $cantidad * 20000 * (1 + $IVG),
    $cantidad <= 12 => $cantidad * 15000 * (1 + $IVG),
    $cantidad > 12  => $cantidad * 15000 * (1 + $IVG) * (1 - $descuento),
};

echo "El total a pagar por $cantidad productos es: $total_a_pagar soles";
?>