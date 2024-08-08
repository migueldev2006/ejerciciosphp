<?php

function cilindro($radio, $altura){
    $numeroPI = 3.1416;
    $volumen = $numeroPI * $radio * $radio * $altura;
    return $volumen;
}
echo "El volumen del cilindro es ".cilindro(2,5);