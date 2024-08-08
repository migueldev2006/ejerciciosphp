<?php
function cambio(){
$text = readline("Ingrese el texto: ");
$palabaracamtext = readline("Ingrese la pabra del texto que desea cambiar: ");
$palabraponer = readline("¿Cual es la palabra que desea poner?");
echo str_replace($palabaracamtext,$palabraponer,$text);
}
echo cambio();