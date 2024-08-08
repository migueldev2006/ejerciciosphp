<?php

function retorno($num1, $num2, $num3, $num4, $num5){
    $suma = $num1 + $num2 + $num3 + $num3 +$num4 + $num5;
    return $suma;
}
$tmp = retorno(1,4,5,8,47);
echo "El resultado de la suma es ".$tmp;